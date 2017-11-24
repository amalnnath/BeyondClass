<?php
/*VERSION 1.4.0*/
	session_start();
    if(isset($_SESSION['username'])) {
    	$user = $_SESSION['username'];
    	$dept = $_SESSION['dept'];
    	$title = $_SESSION['title'];

    	if($title == 'Admin'){
    		include_once("headerAdmin.php");
    	} 
    	elseif($title == 'Student') {   		
    		include_once("headerUser.php");
    	}
    	else{
    		include_once("headerTutor.php");
    	}
    }
    else{
    	include_once("headerGuest.php");
    }
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</html>	