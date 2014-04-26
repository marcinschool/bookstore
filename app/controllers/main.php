<?php

class Main extends Controller {
	function run() {
		$template = $this->loadView('main_view');
		$template->render();
	}

	function index()
	{
		$template = $this->loadView('main_view');
		$template->render();
	}
}

?>
