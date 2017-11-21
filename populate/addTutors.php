<?php
/*
VERSION 1.2.1
*/
include_once("../main/db.php");
$sql = "INSERT INTO TUTOR
		VALUES 	('123456780', 'Raj Kapoor', 'MECE 3390', '4.0', '15', '2000-01-01', '2'),
			('123456781', 'Amit Kumar', 'NUCL 3930', '3.9', '25', '2000-02-02', '1'),
      ('123456782', 'Aditya Kartik', 'SOFE 3200', '4.2', '15', '2000-03-03', '1'),
      ('123456783', 'Rahul Gandhi', 'BIOL 4610', '3.5', '15', '2000-04-04', '2'),
      ('123456784', 'Bob Doe', 'BUSI 3110', '3.6', '10', '2000-05-05', '1'),
      ('123456785', 'Jamie Metha', 'ELEE 3130', '3.5', '12.5', '2000-06-06', '2')";
$query = mysqli_query($db, $sql);
?>
