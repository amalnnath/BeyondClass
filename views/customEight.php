<?php
	include_once("../main/header.php");
 
	$coursename = $_POST['coursename'];

	$sql = ("SELECT Name, Date_Available
			 FROM TUTOR
			 WHERE Course_ID = '$coursename'");
	$result = mysqli_query($db, $sql);
?>
<html>
	<body>
		<h3 align="center">Tutor Availability</h3>
		<table class="table table-hover">
			<tr>
				<th> Name </th>
				<th> Date Available </th>
			</tr>
			<!--Outputs Database Fields Into Table-->
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['Name'] . "</td>";
					echo "<td>" . $row['Date_Available'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
		<br>
		<div align='center' width=100%>
			<button class="btn btn-primary" data-target ="#prompt" data-toggle="modal">Search</button>
		</div>
	</body>
	<!--Search Prompt Modal-->
	<div class="modal fade" id="prompt">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-body">
	        <p><center><h3>Search for Course</h3>
                <fieldset>
                    <form action="customEight.php" method="post" enctype="multipart/form-data">
                        <input  class="form-control" placeholder="Name" name="coursename" type="text"></br>
                        <input  class="btn btn-primary" name="signupTutor" type="submit" value="Sign Up">
                        <footer class="clearfix">
                    </form>
                </fieldset>
            <center></p>
	      </div>
	    </div>
	  </div>
	</div>
</html>