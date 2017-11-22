<?php
/*VERSION 1.2.7*/
	session_start();
    	$user = $_SESSION['name'];

?>	

<html>
<!-- VERSION 1.2.5 -->
	<head>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">		
	</head>
	<!-- This is the Navbar -->
	<div class="navbar navbar-xs navbar-inverse navbar-fixed-top">
		<div class = "container">
			<a href="#" class="navbar-brand">BeyondClass</a>
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="redir" href ="/beyondclass/index.php">Home</a></li>
                    <li><a class="redir" href ="/beyondclass/error.php">About Us</a></li>
                    <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Database Views<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/beyondclass/views/dbStudent.php">Students</a></li>
						    <li><a href="/beyondclass/views/dbCourses.php">Courses</a></li>
						    <li><a href="/beyondclass/views/dbTutor.php">Tutors</a></li>
						    <li><a href="/beyondclass/views/dbBooking.php">Booking</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Custom Views<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/beyondclass/views/customOne.php">View One</a></li>
						    <li><a href="/beyondclass/views/customTwo.php">View Two</a></li>
						    <li><a href="/beyondclass/views/customThree.php">View Three</a></li>
						    <li><a href="/beyondclass/error.php">View Four</a></li>
						    <li><a href="/beyondclass/error.php">View Five</a></li>
						    <li><a href="//beyondclass/error.php">View Six</a></li>
						    <li><a href="/beyondclass/error.php">View Seven</a></li>
						    <li><a href="/beyondclass/error.php">View Eight</a></li>
						    <li><a href="/beyondclass/error.php">View Nine</a></li>
						    <li><a href="/beyondclass/error.php">View Ten</a></li>
						</ul>
					</li>
					<li class="dropdown">
						        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $user;?>
						        <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						         <li><a href="/beyondclass/error.php<?php echo $user?>">Profile</a></li>
						         <li><a href="/beyondclass/main/destroy.php">Logout</a></li>
						        </ul>
						      </li>
				</ul>
			</div>
		</div>
	</div>
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