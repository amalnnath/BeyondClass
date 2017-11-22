<?php
	include_once("main/header.php");
?>
<html>
<!-- VERSION 1.2.9 -->
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body style = "margin-top: 300px;">
		<div class=transBox align="center">
			<h1 align=center>Welcome to BeyondClass</h1>
			<p align=center>Where good grades can become a reality!</p>
			<a data-target ="#signup" data-toggle="modal" class="btn btn-success">Sign Up</a>
		</div>

	</body>
</html>

<style>
			body {
				background-image: url("/beyondclass/img/main.jpeg");
				background-repeat: no-repeat;
				background-size: cover;

			}

			.transBox {
				background-color:white;
				opacity:0.9;
				margin-left: 30%;
				margin-right: 30%;
				padding: 3%;
				margin-top:10%;
				border-radius: 25px;
			}
</style>

<!--Login Modal-->

<div class="modal fade" id="signup">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-body">
	        <p><center><h3>Sign Up</h3>
                <fieldset>
                    <form action="/beyondclass/main/signup.php" method="post" enctype="multipart/form-data">
                        <input  class="form-control" placeholder="Name" name="name" type="text"></br>
                        <input  class="form-control" placeholder="Student ID" name="sid" type="text"></br>
                        <input  class="form-control" placeholder="GPA" name="gpa" type="text"></br>
                        <input  class="form-control" placeholder="Email" name="email" type="text"></br>
                        <input  class="form-control" placeholder="Cell Number" name="cellno" type="text"></br>
                        <input  class="form-control" placeholder="Department Name" name="dept" type="text"></br>
                        <input  class="btn btn-primary" name="signup" type="submit" value="Sign Up">
                        <footer class="clearfix">
                    </form>
                </fieldset><center></p>
	      </div>
	
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->