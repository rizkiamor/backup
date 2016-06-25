<?php
namespace Core;

/**
 * Handles the main functionality of the view including the parsing,
 * caching, and variable storage.
 *
 * @copyright Copyright (c) 2012-2013 Christopher Hill
 * @license   http://www.opensource.org/licenses/mit-license.php The MIT License
 * @author    Christopher Hill <cjhill@gmail.com>
 * @package   MVC
 */
class View
{
	/**
	 * The controller that we need to render.
	 *
	 * @access public
	 * @var    string
	 */
	public $controller = 'index';

	/**
	 * The action that we need to render.
	 *
	 * @access public
	 * @var string
	 */
	public $action = 'index';

	/**
	 * Which layout we are going to use for this view.
	 *
	 * @access public
	 * @var    string
	 */
	public $layout = 'default';

	/**
	 * The variables that we want to pass to the view.
	 *
	 * @access public
	 * @var    array
	 */
	public $_variables = array();

	/**
	 * The View has been created.
	 *
	 * We need to give a reference to ourself to the View Helper.
	 *
	 * @access public
	 */
	public function __construct() {
		ViewHelper::$_view = $this;
	}

	/**
	 * Add a variable to the view.
	 *
	 * These variables will be made available to the view. Any variable that has
	 * already been defined will be overwritten.
	 *
	 * @access public
	 * @param  string $variable The variable we wish to add to the view.
	 * @param  string $value    The value of the variable.
	 */
	public function addVariable($variable, $value) {
		$this->_variables[$variable] = $value;
	}

	/**
	 * Returns a set variable if it exists.
	 *
	 * @access public
	 * @param  string $variable The variable that we wish to retrieve from the view.
	 * @return mixed
	 */
	public function getVariable($variable) {
		return isset($this->_variables[$variable])
			? $this->_variables[$variable]
			: false;
	}

	/**
	 * Render the page.
	 *
	 * @access public
	 * @throws Exception If the view does not exist.
	 */
	public function render() {
		// Can we use a cache to speed things up?
		// If the cache object exists then it means the controller wants to use caching
		// However, the action might have disabled it
		if (Cache::has(Request::getUrl('_'))) {
			// The cache is enabled and there is an instance of the file in cache
			$this->_variables['viewContent'] = Cache::get(Request::getUrl('_'));
		}

		// Nope, there is no cache
		else {
			// Set the action location we need to run
			$templateUrlAction = Config::get('path', 'base') . Config::get('path', 'project')
				. 'View/Script/' . $this->controller . '/' . $this->action . '.phtml';

			// Does the view file exist?
			if (! file_exists($templateUrlAction)) {
				throw new \Exception('The view ' . $this->action . ' does not exist in ' . $this->controller);
			}

			// And parse the action's script
			$this->_variables['viewContent'] = $this->parse(
				$templateUrlAction,
				$this->_variables,
				Request::getUrl('_')
			);
		}

		// This is the end of the controller's work
		Profiler::deregister('action',     $this->action);
		Profiler::deregister('controller', $this->controller);

		// Now start to wrap the view content in the layout
		if (! $this->layout) {
			// No template, thanks
			$template = $this->_variables['viewContent'];
		} else {
			// Set the action location we need to run
			$templateUrlLayout = Config::get('path', 'base') . Config::get('path', 'project')
				. 'Layout/' . $this->layout . '.phtml';

			// And parse the action's script
			$template = $this->parse(
				$templateUrlLayout,
				$this->_variables
			);
		}

		// Inform the event listener that we are about to shutdown
		Event::trigger(
			'initShutdown',
			array(
				'controller' => $this->controller,
				'action'     => $this->action
			)
		);

		// Stop the profiling, we're done
		Profiler::stop();

		// Add the profile to the page output?
		if (Config::get('profiler', 'enable', true)) {
			$template .= $this->profiler(Profiler::getProfilerData());
		}

		// And now, the journey ends
		// We die so that we do not call other action's render()
		die($template);
	}

	/**
	 * Parse a template, also caching if desired.
	 *
	 * @param  string $template  The full path of the template file.
	 * @param  array  $variables The variables we wish to replace.
	 * @param  string $cacheName What to call the cached file.
	 * @return string
	 */
	public function parse($template, $variables, $cacheName = null) {
		// Start profiling
		$templateName = str_replace(
			Config::get('path', 'base') . Config::get('path', 'project'),
			'',
			$template
		);
		Profiler::register('Parse', $templateName);

		// The view exists
		// Extract the variables that have been set
		if ($variables) {
			extract($variables);
		}

		// Enable object buffering
		ob_start();

		// And include the file for parsing
		include $template;

		// Get the content of the view after parsing, and dispose of the buffer
		$content = ob_get_contents();
		ob_end_clean();

		// If we are using the cache then save it
		if ($cacheName && Config::get('cache', 'enable')) {
			Cache::put(
				$cacheName,
				$content . '<!-- Cached: ' . date('r') . ' //-->'
			);
		}

		// And return the result of this parse
		Profiler::deregister('Parse', $templateName);
		return $content;
	}

	/**
	 * Provides a nice interface to call view helpers.
	 *
	 * This is a magic function, so any calls to the view/view helper which do not
	 * exist will end up here. We only pass through the first parameter to make for
	 * a nicer implementation in each view helper. This is why it needs to be an array.
	 *
	 * @access public
	 * @param  string $helperName The View Helper that we wish to use.
	 * @param  array  $param      The parameters that need to be passed to the View Helper.
	 * @return string
	 * @magic
	 */
	public function __call($helperName, $param) {
		// Try and instantiate the helper
		// Note: Calling section_Author will translate to Section\Author
		$viewHelperClassName = Config::get('settings', 'project')
			. '\View\Helper\\'
			. str_replace('_', '\\', $helperName);
		$viewHelper = new $viewHelperClassName();

		// Render and return
		Profiler::register('Helper', $helperName);
		$content = $viewHelper->render(isset($param[0]) ? $param[0] : array());
		Profiler::deregister('Helper', $helperName);
		return $content;
	}
}