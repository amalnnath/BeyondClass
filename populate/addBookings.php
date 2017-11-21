<?php

include_once("../main/db.php");

$sql = "INSERT INTO BOOKING 
		VALUES 	('1', '123456780', '232228888', 'MECE 3390', '9:00', '11:00', '2000-01-01'), ('2', '123456781', '310679999', 'NUCL 3930', '13:00', '14:00', '2000-02-02')";
$query = mysqli_query($db, $sql);

?>
