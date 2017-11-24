<?php
/*VERSION 1.4.0*/
	session_start();
    	$user = $_SESSION['name'];

?>	

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beyond Class</title>
    <meta name="description" content="Course Project">
    <meta name="keywords" content="BeyondClass, Beyond Class, Tutoring, UOIT, Database Management">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  </head>
	<!-- This is the Navbar -->
<nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" title="BeyondClass">BeyondClass</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="/beyondclass/about.php">About Us</a></li>
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="/beyondclass/views/customOne.php">Available Sessions</a></li>
              <li><a href="/beyondclass/views/customSix.php">Available Tutors</a></li>
              <li><a href="/beyondclass/views/customEight.php">Search Tutors Available</a></li>
              </ul>
              </li>
              <li><a href="contact.php">Contact</a></li>
                        <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $user;?>
                    <ul class="dropdown-menu">
                     <li><a href="/beyondclass/error.php<?php echo $user?>">Profile</a></li>
                     <li><a href="/beyondclass/main/destroy.php">Logout</a></li>
                    </ul>
                  </li>
            </ul>
          </div>
        </div>
      </nav>
	<!-- This is the footer -->
	<div class ="navbar-default navbar-fixed-bottom">
		<div class="container">
			<p class="navbar-text">Copyright 	&copy; 2017 BeyondClass. All rights reserved. Powered by Aphro Inc.</p>
		</div>
	</div>
</html>		

<!--Login Modal-->

<div class="modal fade" id="login">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-body">
	        <p><center><h3>Login</h3>
                <fieldset>
                    <form action="/beyondclass/main/login.php" method="post" enctype="multipart/form-data">
                        <input  class="form-control" placeholder="Username" type="username" name="username" type="text"></br>
                        <input  class="form-control" placeholder="Password" type="password" name="password" type="password"></br>
                        <input  class="btn btn-primary" name="login" type="submit" value="Login">
                        <footer class="clearfix">
                    </form>
                </fieldset><center></p>
	      </div>
	
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->