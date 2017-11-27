<?php
	include_once("db.php");
	echo "ARRIVED ";
	if(isset($_POST['signup'])){

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
        	if($name && $sid && $gpa && $email && $cellno && $dept && $pwd){
        		$sql = "INSERT INTO STUDENT VALUES ('$sid', '$name', '$gpa', '$email', '$cellno', '$dept', '$pwd')";
        		$query = mysqli_query($db, $sql);
        		echo "SIGN UP SUCCESS. PLEASE GO BACK TO HOME PAGE TO LOG IN!";
        	} else {

        		echo "SIGN UP FAILED";
        	}

        }

	} 

	//Tutor Sign Up
	if(isset($_POST['signupTutor'])){

		$name = $_POST['name'];
		$tid = $_POST['tid'];
		$gpa = $_POST['gpa'];
		$courseid = $_POST['courseid'];
		$cost = $_POST['cost'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$pwd = $_POST['pwd'];

		$name = mysqli_real_escape_string($db, $name);
		$tid = mysqli_real_escape_string($db, $tid);
		$gpa = mysqli_real_escape_string($db, $gpa);
		$courseid = mysqli_real_escape_string($db, $courseid);
		$cost = mysqli_real_escape_string($db, $cost);
		$date = mysqli_real_escape_string($db, $date);
		$time = mysqli_real_escape_string($db, $time);
		$pwd = mysqli_real_escape_string($db, $pwd);
		$pwd = md5($pwd);
		
		$sql = "SELECT * FROM TUTOR WHERE Tutor_ID='$tid' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);

        $dbsid = $row['Tutor_ID'];

        if($tid == $dbsid){
        	echo "ID ALREADY IN USE, MAKE SURE CORRECT STUDENT/TUTOR ID WAS ENTERED!";
        }
        else{
        	if($name && $tid && $gpa && $courseid && $cost && $date && $time && $pwd){
        		$sql = "INSERT INTO TUTOR VALUES ('$tid', '$name', '$courseid', '$gpa', '$cost', '$date', '$time', '$pwd')";
        		$query = mysqli_query($db, $sql);
        		echo "SIGN UP SUCCESS. PLEASE GO BACK TO HOME PAGE TO LOG IN!";
        	} else {

        		echo "SIGN UP FAILED. PLEASE TRY AGAIN LATER!";
        	}

        }

	} 

?>
<br>
<a href="/beyondclass/index.php">Go Home</a>