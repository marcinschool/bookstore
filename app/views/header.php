<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    
    <title>Online Bookstore</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="static/css/bootstrap.min.css" type="text/css" media="screen" />
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="static/js/bootstrap.min.js" language="Javascript"></script>
    <link rel="stylesheet" href="static/css/style.css" type="text/css" media="screen" />
</head>
<body>
	<div id="top">
		<div class="mid over" style="height:30px;">
			<div class="logo">Online Bookstore</div>
			<div class="user">
<?php
	if(isset($user->user_id))
	{
?>
		<div class="dropdown" style="z-index: 99;position:absolute">
		  <button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
		    <?=$user->imie. " " . $user->nazwisko?>
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Koszyk</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ustawienia</a></li>
<?php
		switch($user->uprawnienia)
		{
			case 1:
				echo '<li role="presentation" class="divider"></li>';
				echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Administrator</a></li>';
				break;
			case 2:
				echo '<li role="presentation" class="divider"></li>';
				echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pracownik</a></li>';
				break;
			case 3:
				echo '<li role="presentation" class="divider"></li>';
				echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Magazynier</a></li>';
				break;
		}
?>
		    <li role="presentation" class="divider"></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Wyloguj</a></li>
		  </ul>
		</div>
<?php
	}
	else
	{
?>
		<a class="btn btn-warning" href="?page=account&action=register">Rejestruj</a>
		<a class="btn btn-success" href="?page=account">Zaloguj</a>
<?php
	}
?>
			</div>
		</div>
	</div>