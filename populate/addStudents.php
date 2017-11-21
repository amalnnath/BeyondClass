<?php
include_once("../main/db.php");
$sql = "INSERT INTO STUDENT
		VALUES 	('111117777','John Doe','3.8','john.doe@example.com','416-647-9050','FEAS'),
				('232228888','Mary Bob','4.1','mary.bob@example.com','416-647-9052','FESNS'),
        ('310679999', 'Ryan Smith', '4.0', 'ryan.smith@example.com', '416-647-9053', 'FEAS'),
        ('443060000', 'Jack Blue', '3.5', 'jack.blue@example.com', '416-647-9051', 'FHS'),
        ('514901111', 'Tim Horton', '3.8', 'tim.horton@example.com', '416-647-9054', 'FBIT'),
        ('612675555', 'Ron Musk', '3.7', 'ron.musk@example.com', '289-647-9055', 'FEAS'),
        ('718972522', 'Tyler Dam', '3.6', 'tyler.dam@example.com', '416-647-9056', 'FESNS'),
        ('319992356', 'Billy Rob', '3.8', 'billy.bob@example.com', '289-416-4160', 'FBIT'),
        ('976337845', 'Mike Rob', '4.0', 'mike.rob@example.com', '416-647-4166', 'FHS'),
        ('907622344', 'Nav Singh', '3.6', 'nav.singh@example.com', '289-416-4160', 'FESNS'),
        ('591822233', 'Steve Bill', '3.5', 'steve.bill@example.com', '416-647-9059', 'FEAS')";
$query = mysqli_query($db, $sql);
?>

<html>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
</html>
