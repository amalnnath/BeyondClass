<?php
/*VERSION 1.4.0*/
	session_start();
	if(isset($_SESSION['username'])) {
		unset($_SESSION['username']);
		unset($_SESSION['dept']);
		unset($_SESSION['name']);
		unset($_SESSION['title']);
		session_destroy();
		header("Location: /beyondclass/index.php");
	}
?>