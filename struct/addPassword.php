<?php
/*
VERSION 1.3.2
*/
	include_once("../main/db.php");
	$sql = "ALTER TABLE STUDENT ADD Password VARCHAR(255)";
	$query = mysqli_query($db, $sql);
	echo "PASSWORD COLUMN ADDED TO STUDENT! ";
	$sql = "ALTER TABLE TUTOR ADD Password VARCHAR(255)";
	$query = mysqli_query($db, $sql);
	echo "PASSWORD COLUMN ADDED TO TUTOR!";
?>
