<html>
<!-- VERSION 1.2.3 -->
<?php 
	include_once("../main/db.php");
	include_once("../main/header.php");
	$sql = "SELECT * FROM COURSES";
	$result = mysqli_query($db, $sql);
?>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body style = "margin-top: 70px;">
		<h3 align="center">Courses</h3>
		<table class="table table-hover">
			<tr><th>Course ID</th>
				<th>Course Name</th>
				<th>Department</th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['CourseID'] . "</td>";
					echo "<td>" . $row['CourseName'] . "</td>";
					echo "<td>" . $row['Department'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>

