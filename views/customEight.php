<?php
/*
VERSION 1.4.0
*/
	include_once("../main/db.php");
	include_once("../main/header.php");
    
    $name = $_POST['name'];
	


	$sql = ("SELECT Name, Date_Available
			 FROM TUTOR
			 WHERE Course_ID = '$name'");
	$result = mysqli_query($db, $sql);
?>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body style = "margin-top: 70px;">
		</script>
		<h3 align="center">Tutor Availability</h3>
		<table class="table table-hover">
			<tr>
				<th> Name </th>
				<th> Date Available </th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['Name'] . "</td>";
					echo "<td>" . $row['Date_Available'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
		<button class="btn btn-primary"data-target ="#prompt" data-toggle="modal" >SEARCH</button>

	<div class="modal fade" id="prompt">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-body">
	        <p><center><h3>Search for Course</h3>
                <fieldset>
                    <form action="customEight.php" method="post" enctype="multipart/form-data">
                        <input  class="form-control" placeholder="Name" name="name" type="text"></br>
                        <input  class="btn btn-primary" name="signupTutor" type="submit" value="Sign Up">

                        <footer class="clearfix">
                    </form>
                </fieldset><center></p>
	      </div>
	
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	</body>
</html>
