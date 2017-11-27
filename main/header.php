<?php
/*VERSION 1.4.0*/
	session_start();
    include_once("db.php")
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    	$user = $_SESSION['username'];
    	$dept = $_SESSION['dept'];
    	$title = $_SESSION['title'];

    	if($title == 'Admin'){
    		include_once("header/headerAdmin.php");
    	} 
    	elseif($title == 'Student') {   		
    		include_once("header/headerUser.php");
    	}
    	else{
    		include_once("header/headerTutor.php");
    	}
    }
    else{
    	include_once("header/headerGuest.php");
    }
?>
<html>
    <head>
        <meta name="description" content="Course Project">
        <meta name="keywords" content="BeyondClass, Beyond Class, Tutoring, UOIT, Database Management">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="/beyondclass/css/styles-merged.css">
        <link rel="stylesheet" href="/beyondclass/css/style.min.css">
        <link rel="stylesheet" href="/beyondclass/css/custom.css">
    </head>

    <!-- This is the footer -->
    <div class ="navbar-default navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text">Copyright    &copy; 2017 BeyondClass. All rights reserved.</p>
        </div>
    </div>

    <!--Login Modal-->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" style="font-size: 50px;">&times;</button>
                <div class="modal-body">
                    <p><center>
                        <h3>Login</h3>
                        <fieldset>
                            <form action="/beyondclass/main/login.php" method="post" enctype="multipart/form-data">
                                <input  class="form-control" placeholder="Username" type="username" name="username" type="text"></br>
                                <input  class="form-control" placeholder="Password" type="password" name="password" type="password"></br>
                                <input  class="btn btn-primary" name="login" type="submit" value="Login">
                                <footer class="clearfix">
                            </form>
                        </fieldset>
                    <center></p>
                </div>
            </div>
        </div>
    </div>
</html>	