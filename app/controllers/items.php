<?php

class Items extends Controller {
	function run() {
		$model = $this->loadModel("user_model");
		$user = $model->getUser($_SESSION['user_id']);

		$model = $this->loadModel("items_model");
		$gatunki = $model->getGatunki();

		$template = $this->loadView('main_view');
		$template->set('user', $user);
		$template->set('gatunki', $gatunki);
		$template->render();
	}

	function index()
	{
		$template = $this->loadView('main_view');
		$template->render();
	}
}

?>
