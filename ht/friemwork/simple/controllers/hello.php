<?php

class hello extends BaseController{

	//contoh construct pada Controller :)
		function __construct(){
		parent::__construct();
		require 'models/index_model.php';
		$this->model = new Index_Model();
		require $this->view->render('hello');
	}

}
