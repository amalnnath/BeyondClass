<?php
	include_once("../main/header.php");
	$sql = ("	SELECT AVG(GPA), Department_Name
			 	FROM STUDENT
			 	GROUP BY Department_Name");
	$result = mysqli_query($db, $sql);
?>
<html>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body>
		<h3 align="center">Student Averages in each Department</h3>
		<table class="table table-hover">
			<tr>
				<th> Name </th>
				<th> GPA </th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['Department_Name'] . "</td>";
					echo "<td>" . $row['AVG(GPA)'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>
