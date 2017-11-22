<?php
/*VERSION 1.2.6*/
	session_start();
	if(isset($_SESSION['username'])) {
		unset($_SESSION['username']);
		session_destroy();
		header("Location: /beyondclass/index.php");
	}
?>