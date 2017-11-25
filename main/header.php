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
    <meta name="description" content="Course Project">
    <meta name="keywords" content="BeyondClass, Beyond Class, Tutoring, UOIT, Database Management">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="/beyondclass/css/styles-merged.css">
    <link rel="stylesheet" href="/beyondclass/css/style.min.css">
    <link rel="stylesheet" href="/beyondclass/css/custom.css">
</html>	