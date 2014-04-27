<?php

class Main extends Controller {
	function run() {
		$model = $this->loadModel("items_model");
		$gatunki = $model->getGatunki();

		if(isset($this->get['gatunek']))
			$produkty = $model->getProdukty($this->get['gatunek']);
		else
			$produkty = $model->getProdukty();

		$template = $this->loadView('main_view');
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
