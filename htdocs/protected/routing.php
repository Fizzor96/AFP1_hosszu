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
?>