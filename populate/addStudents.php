<?php

include_once("../main/db.php");

$sql = "INSERT INTO STUDENT 
		VALUES 	('111117777','John Doe','3.8','john.doe@example.com','416-647-9050','FEAS'),
				('232228888','Mary Bob','4.1','mary.bob@example.com','416-647-9052','FESNS')";
$query = mysqli_query($db, $sql);

?>
