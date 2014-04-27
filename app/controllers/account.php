<?php

class Account extends Controller {
	private $get;
	private $post;

	public function run() {
		$this->get = $_GET;
		$this->post = $_POST;

		$action = isset($_GET['action'])?$_GET['action']: '';

		switch($action)
		{
			case 'register':
				if(isset($_POST['register']))
				{
					$this->register_post();
				}
				else
				{
					$this->register();
				}
				break;
			default:
				if(isset($_POST['login']))
				{
					$this->login_post();
				}
				else
				{
					$this->login();
				}
				break;
		}	
	}

	private function register()
	{
		$template = $this->loadView('account_register_view');
		$template->render();
	}
 
	private function login()
	{
		$template = $this->loadView('account_login_view');
		$template->render();
	}

	private function register_post()
	{
		if(isset($this->post['imie']) && !empty($this->post['imie']) &&
		   isset($this->post['nazwisko']) && !empty($this->post['nazwisko']) &&
		   isset($this->post['email']) && !empty($this->post['email']) &&
		   isset($this->post['haslo']) && !empty($this->post['haslo']) &&
		   isset($this->post['haslo2']) && !empty($this->post['haslo2'])) 
		{
			if($this->post['haslo'] == $this->post['haslo2'])
			{
				$model = $this->loadModel('account_model');
				$model->register(&$this->post);

				$template = $this->loadView('account_register_view');
				$template->set('success', 'Udało Ci sie zarejestrować. Teraz się zaloguj!');
				$template->render();
			}
			else
			{
				$template = $this->loadView('account_register_view');
				$template->set('error','Hasła się nie zgadzają');
				$template->render();
			}
		}
		else
		{
			$template = $this->loadView('account_register_view');
			$template->set('error', 'Wypełnij poprawnie wszystkie pola');
			$template->render();
		}
	}

	private function login_post() {
		if(isset($this->post['email']) && !empty($this->post['email']) &&
		   isset($this->post['haslo']) && !empty($this->post['haslo']))
		{
			$model = $this->loadModel('account_model');
			$user_id = $model->login($this->post['email'], $this->post['haslo']);

			if($user_id > 0) {
				$_SESSION['user_id'] = $user_id;
				$this->redirect("index.php");
			} else {
				$template = $this->loadView('account_login_view');
				$template->set('error', 'Email lub Hasło nie jest poprawne');
				$template->render();
			}
		}
		else
		{
			$template = $this->loadView('account_login_view');
			$template->set('error', 'Wypełnij wszystkie dane');
			$template->render();
		}
	}
}

?>
