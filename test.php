<?php

include_once("main/db.php");
include_once("main/header.php");

//$sql = "INSERT INTO STUDENT VALUES ('','Pete','4.0','pete@pete.com','647-666-6464','FEAS')";
//$query = mysqli_query($db, $sql);


?>

<?php
	$article=$_GET['story'];

	include_once("header.php");
	include_once("db.php");
	
	$sql = "SELECT * FROM stories WHERE id='$article' LIMIT 1";
    $query = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($query);
    $story2 = $row['story'];
    $title = $row['title'];
    $user2 = $row['author'];
?>

<html>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>

	</head>
	<body style="margin-bottom:0%; margin-top:3%; "class="container">
	<div class="container">
  <h2>FEAS Tutors</h2>         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
	</body>
</html>
