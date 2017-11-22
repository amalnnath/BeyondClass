<?php
/*
VERSION 1.3.2
*/
	echo "ARRIVED ";
	if(isset($_POST['signup'])){

		include_once("db.php");

		$name = $_POST['name'];
		$sid = $_POST['sid'];
		$gpa = $_POST['gpa'];
		$email = $_POST['email'];
		$cellno = $_POST['cellno'];
		$dept = $_POST['dept'];
		$pwd = $_POST['pwd'];

		$name = mysqli_real_escape_string($db, $name);
		$sid = mysqli_real_escape_string($db, $sid);
		$gpa = mysqli_real_escape_string($db, $gpa);
		$email = mysqli_real_escape_string($db, $email);
		$cellno = mysqli_real_escape_string($db, $cellno);
		$dept = mysqli_real_escape_string($db, $dept);
		$pwd = mysqli_real_escape_string($db, $pwd);
		$pwd = md5($pwd);
		
		$sql = "SELECT * FROM STUDENT WHERE S_ID='$sid' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);

        $dbsid = $row['S_ID'];

        if($sid == $dbsid){
        	echo "USERNAME TAKEN!";
        }
        else{
        	if($name && $sid && $gpa && $email && $cellno && $dept){
        		$sql = "INSERT INTO STUDENT VALUES ('$sid', '$name', '$gpa', '$email', '$cellno', '$dept', '$pwd')";
        		$query = mysqli_query($db, $sql);
        		echo "SIGN UP SUCCESS. PLEASE GO BACK TO HOME PAGE TO LOG IN!";
        	} else {

        		echo "SIGN UP FAILED";
        	}

        }

	} 
?>
<br>
<a href="/beyondclass/index.php">Go Home</a>