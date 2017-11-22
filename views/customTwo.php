<html>
<!-- VERSION 1.2.4 -->
<?php
	include_once("../main/db.php");
	include_once("../main/header.php");
	$sql = ("SELECT AVG(T.Cost), T.Course_ID
          FROM TUTOR T
          WHERE T.Tutor_ID = ANY (SELECT Tutor_ID FROM TUTOR WHERE GPA >= 3.7)
          GROUP BY T.Course_ID");
	$result = mysqli_query($db, $sql);
?>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body style = "margin-top: 70px;">
		<h3 align="center">Custom View 2</h3>
		<table class="table table-hover">
			<tr>
				<th>Course ID</th>
				<th>Average Cost</th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['Course_ID'] . "</td>";
					echo "<td>" . $row['AVG(T.Cost)'] . "</td>";

					echo "</tr>";
				}

			?>
		</table>
	</body>
</html>
