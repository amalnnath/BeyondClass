<?php
/*
VERSION 1.4.0
*/
	include_once("../main/db.php");
	include_once("../main/header.php");
	$sql = ("SELECT COUNT(B.S_ID), T.Name
			FROM BOOKING AS B, TUTOR AS T
			WHERE B.Tutor_ID = T.Tutor_ID
			GROUP BY T.Name");
	$result = mysqli_query($db, $sql);
?>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body style = "margin-top: 70px;">
		<h3 align="center">Bookings for each Tutor</h3>
		<table class="table table-hover" align="center">
			<tr>
				<th> Tutor Name </th>
				<th> Number of Bookings</th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['Name'] . "</td>";
					echo "<td>" . $row['COUNT(B.S_ID)'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>
