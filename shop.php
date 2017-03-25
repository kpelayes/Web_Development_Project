<?php
	session_set_cookie_params(0);
	session_start();
	if(!isset($_SESSION['log']))
		header('Location: store.html');
	else  
		header('Location: storeh.html');
?>
