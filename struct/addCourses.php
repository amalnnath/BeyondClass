<?php
/*
VERSION 1.2.3
*/
include_once("../main/db.php");
$sql = "INSERT INTO COURSES
		VALUES 	('MECE 3390','Mechatronics','FEAS'),
				('NUCL 3930','Heat Transfer', 'FESNS'),
        ('SOFE 3200', 'Systems Programming', 'FEAS'),
        ('BIOL 4610', 'Field Biology', 'FHS'),
        ('BUSI 3110', 'Intro to Taxation', 'FBIT'),
        ('ELEE 3130', 'Communication Systems', 'FEAS')";
$query = mysqli_query($db, $sql);
echo "Courses has been populated!"
?>
