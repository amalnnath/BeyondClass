<?php
/*VERSION 1.3.1*/
	session_start();
	if(isset($_SESSION['username'])) {
		unset($_SESSION['username']);
		unset($_SESSION['dept']);
		unset($_SESSION['name']);
		session_destroy();
		header("Location: /beyondclass/index.php");
	}
?>