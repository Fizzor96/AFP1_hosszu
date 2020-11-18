<?php

if(empty($_GET['P']))
	$_GET['P'] = 'home';

switch ($_GET['P']) {
	case 'home':
		if(!isset($_GET['V'])){
			require_once PROTECTED_DIR.'pages/home.php';

		}
		else {
			require_once PROTECTED_DIR.'pages/ettermek.php';
		}
		require_once PROTECTED_DIR.'pages/login.php';
		require_once PROTECTED_DIR.'pages/register.php';
		require_once PROTECTED_DIR.'database.php';
		break;

	case 'logout':
		session_destroy();
		header("Location: index.php?");
		die();
		break;
		
	case 'citiesEdit':
		if(isset($_SESSION['flags'])&&$_SESSION['flags'] > 5){
			require_once PROTECTED_DIR.'admin/citiesEdit.php';
		}
		else{
			header('Location: index.php');
		}
		break;
?>