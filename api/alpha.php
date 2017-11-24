<?php 
/*
VERSION	1.3.6
*/

	include_once("../main/db.php");

	$sql = "SELECT Name, GPA FROM STUDENT";
	$result = mysqli_query($db, $sql);

	$json = array();
	$post = array();
	while($r = mysqli_fetch_array($result)){
	  
	  $name = $r['Name'];
	  $gpa = $r['GPA'];

	  $post[] = array('name' => $name, 'gpa' => $gpa);
	}

	$json['students'] = $post;
	$json = json_encode($json, JSON_PRETTY_PRINT);
	echo "<pre>".$json."</pre>";
?>