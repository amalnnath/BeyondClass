<?php
/*VERSION 1.3.1*/
	session_start();
    if(isset($_SESSION['username'])) {
    	$user = $_SESSION['username'];
    	$dept = $_SESSION['dept'];
    	include_once("headerUser.php");
    }
    else{
    	include_once("headerGuest.php");
    }
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</html>	