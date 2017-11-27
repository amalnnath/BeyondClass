<?php
	include_once("../main/header.php");
	$sql = "SELECT T.Name, B.Booking_Course_ID, B.StartTime, B.Date
			FROM TUTOR AS T
			RIGHT JOIN BOOKING AS B
			ON T.Tutor_ID = B.Tutor_ID";

	$result = mysqli_query($db, $sql);
?>

<html>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body>
		<h3 align="center">Booking Details</h3>
		<table class="table table-hover">
			<tr>
				<th>Name</th>
				<th> Booking Course ID</th>
		        <th> Booking Start Time </th>
		        <th> Booking Date </th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['Name'] . "</td>";
					echo "<td>" . $row['Booking_Course_ID'] . "</td>";
					echo "<td>" . $row['StartTime'] . "</td>";
					echo "<td>" . $row['Date'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>
