<?php

class Controller {
	
	public function loadModel($name)
	{
		require('app/models/'. strtolower($name) .'.php');

		$model = new $name;
		return $model;
	}
	
	public function loadView($name)
	{
		$view = new View($name);
		return $view;
	}
	
	public function redirect($loc)
	{
		header('Location: '. $loc);
	}
}

?>