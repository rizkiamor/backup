<?php
namespace MyProject\View\Helper;
use Core;

/**
 * Render a nice waterfall profile of where the time was spent in the application.
 *
 * @copyright   2012 Christopher Hill <cjhill@gmail.com>
 * @author      Christopher Hill <cjhill@gmail.com>
 * @since       25/04/2013
 */
class Profiler extends Core\ViewHelper
{
	/**
	 * Render the waterfall profiler.
	 *
	 * <code>
	 * array(
	 *     'requestStart' => 123,
	 *     'requestEnd'   => 456,
	 *     'stack'        => array()
	 * )
	 * </code>
	 *
	 * @access public
	 * @param  array  $params The data that we received from the Core\Profiler.
	 * @return string
	 */
	public function render($params) {
		// Work out the total runtime and set the trace item HTML
		$profilerRuntime   = $params['requestEnd'] - $params['requestStart'];
		$profilerTraceHtml = '';

		// Loop over each trace
		foreach ($params['stack'] as $traceId => $trace) {
			// Work out where to position this trace in the waterfall
			$traceStart = (($trace['start'] - $params['requestStart']) / $profilerRuntime) * 100;
			$traceEnd   = (($trace['end']   - $params['requestStart']) / $profilerRuntime) * 100;

			// Get the trace HTML
			$profilerTraceHtml .= $this->renderPartial('ProfilerItem', array(
				'traceType'  => strtolower($trace['type']),
				'traceTitle' => $trace['name'],
				'traceStart' => $traceStart,
				'traceEnd'   => $traceEnd - $traceStart,
				'traceTime'  => number_format($trace['end'] - $trace['start'], 3),
				'traceMem'   => number_format($trace['mem'] / 1024 / 1024, 3)
			));
		}

		// And place the trace items into the profiler container
		return $this->renderPartial('Profiler', array(
			'profilerRuntime'   => number_format($profilerRuntime, 3),
			'profilerTraceHtml' => $profilerTraceHtml
		));
	}
}