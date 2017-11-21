<?php
/*
VERSION 1.2.3
*/

include_once("../main/db.php");

 $sql = "INSERT INTO STUDENT VALUES ('5','Peter','3.8','peter@example.com','647-666-6789','FEAS')";
$query = mysqli_query($db, $sql);

?>
