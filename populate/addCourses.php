<?php

include_once("../main/db.php");

$sql = "INSERT INTO COURSES 
		VALUES 	('MECE 3390','Mechatronics','FEAS'),
				('NUCL 3930','Heat Transfer', 'FESNS')";
$query = mysqli_query($db, $sql);

?>
