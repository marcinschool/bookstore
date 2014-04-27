<?php

class Items extends Controller {
	function run() {
		$this->get = $_GET;
		$this->post = $_POST;

		$model = $this->loadModel("user_model");
		$user = $model->getUser($_SESSION['user_id']);

		$model = $this->loadModel("items_model");
		$gatunki = $model->getGatunki();

		if(isset($this->get['gatunek']))
			$produkty = $model->getProdukty($this->get['gatunek']);
		else
			$produkty = $model->getProdukty();

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
