<html>
<?php
	include_once("../main/db.php");
	include_once("../main/header.php");
	$sql = "SELECT *
          	FROM TUTOR
          	RIGHT JOIN BOOKING
          	ON T.Tutor_ID = B.Tutor_ID";

	$result = mysqli_query($db, $sql);
?>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body>
		<br>
		<br>
		<h3 align="center">In Progress...</h3>
		<table class="table table-hover">
			<!--<tr>
				<th>Name</th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['Name'] . "</td>";
					echo "</tr>";
				}
			?>-->
		</table>
	</body>
</html>
