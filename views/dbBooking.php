<?php 
	include_once("../main/db.php");
	include_once("../main/header.php");
	$sql = "SELECT * 
			FROM BOOKING";
	$result = mysqli_query($db, $sql);
?>
<html>
  	<head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body>
		<h3 align="center">Booking</h3>
		<table class="table table-hover">
			<tr>
				<th>Booking ID</th>
				<th>Tutor ID</th>
				<th>Student ID</th>
				<th>Course</th>
				<th>Start Time</th>
				<th>End Time</th>
				<th>Date</th>
			</tr>
			<!--Outputs Database Fields Into Table-->
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['Booking_ID'] . "</td>";
					echo "<td>" . $row['Tutor_ID'] . "</td>";
					echo "<td>" . $row['S_ID'] . "</td>";
					echo "<td>" . $row['Booking_Course_ID'] . "</td>";
					echo "<td>" . $row['StartTime'] . "</td>";
					echo "<td>" . $row['EndTime'] . "</td>";
					echo "<td>" . $row['Date'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>

