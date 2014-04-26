<?php

function run()
{   	
	$page = isset($_GET['page'])? $_GET['page']: '';

	if(isset($_SESSION['user_id']))
	{
		switch($page)
		{
			case 'index':
				break;
			default:
				require_once('app/controllers/items.php');
				$controller = 'items';
				break;
		}
	}
	else
	{
		switch($page)
		{
			case 'index':
				break;
			case 'account':
				require_once('app/controllers/account.php');
				$controller = 'account';
				break;
			default:
				require_once('app/controllers/main.php');
				$controller = 'main';
				break;
		}
	}

	$obj = new $controller;
	$obj->run();
}

?>
