<?php
/*
VERSION 1.2.3
*/
include_once("../main/db.php");
$sql = "INSERT INTO COURSES
		VALUES 	('MECE 3390' , 'Mechatronics'             , 'FEAS' ),
				('NUCL 3930' , 'Heat Transfer'            , 'FESNS'),
		        ('SOFE 3200' , 'Systems Programming'      , 'FEAS' ),
		        ('BIOL 4610' , 'Field Biology'            , 'FHS'  ),
		        ('BUSI 3110' , 'Intro to Taxation'        , 'FBIT' ),
		        ('ELEE 3130' , 'Communication Systems'    , 'FEAS' ),

		        ('BUSI 1915' , 'Business Math I' 	      , 'FBIT' ),
		        ('EDUC 1301' , 'Learning and Development' , 'FED' ),
		        ('SOCI 1000' , 'Introductory Sociology'    , 'FSSH' ),
		        ('BIOL 1010' , 'Biology I'    , 'FSc' ),
		        ('CHEM 1010' , 'Chemistry I'    , 'FSc' )



		        ";
$query = mysqli_query($db, $sql);
echo "Courses has been populated!"
?>
