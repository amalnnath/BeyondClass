<?php
	include_once("../main/header.php");
	$sql = "	SELECT S.Name
          		FROM STUDENT AS S
          		WHERE S.GPA > (SELECT AVG(GPA)
         		FROM STUDENT)";

	$result = mysqli_query($db, $sql);
?>
<html>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body>
		<h3 align="center">Above Average Students</h3>
		<table class="table table-hover">
			<tr>
				<th>Name</th>
			</tr>
			<!--Outputs Database Fields Into Table-->
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['Name'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>
