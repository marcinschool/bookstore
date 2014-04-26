<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    
    <title>Online Bookstore</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="static/css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="static/css/style.css" type="text/css" media="screen" />
</head>
<body>
	<div id="top">
		<div class="mid over">
			<div class="logo">Online Bookstore</div>
			<div class="user">
<?php
	if(isset($user->user_id))
	{
?>
		<a class="btn btn-warning" href="?page=account&action=logout"><?=$user->imie. " " . $user->nazwisko?></a>
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