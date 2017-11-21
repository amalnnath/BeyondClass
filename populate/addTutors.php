<?php

include_once("../main/db.php");

$sql = "INSERT INTO TUTOR 
		VALUES 	('123456780', 'Raj Kapoor', 'MECE 3390', '4.0', '15', '2000-01-01', '2'),
			('123456781', 'Amit Kumar', 'NUCL 3930', '3.9', '25', '2000-02-02', '1')
				";
$query = mysqli_query($db, $sql);

?>
