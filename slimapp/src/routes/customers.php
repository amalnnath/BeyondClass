<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;



$app = new \Slim\App;

//Get All customers

$app->get('/api/student/info', function(Request $request, Response $response){
$sql = "SELECT Name, GPA FROM student";

try{
$db =new db();
$db = $db->connect();

$stmt = $db->query($sql);
$student = $stmt->fetchAll(PDO::FETCH_OBJ);
$db = null;

echo json_encode($student);
}catch(PDOException $e){
  echo '{"error": {"text": '.$e->getMessage().'}';
}



});
$app->get('/api/customers/{S_ID}', function(Request $request, Response $response){
  $S_ID = $request->getAttribute('S_ID');
$sql = "SELECT Name, GPA FROM student where S_ID = $S_ID";

try{
$db =new db();
$db = $db->connect();

$stmt = $db->query($sql);
$student = $stmt->fetchAll(PDO::FETCH_OBJ);
$db = null;

echo json_encode($student);
}catch(PDOException $e){
  echo '{"error": {"text": '.$e->getMessage().'}';
}



});

$app->post('/api/customers/add', function(Request $request, Response $response){
  $S_ID = $request->getParam('S_ID');
  $Name= $request->getParam('Name');
  $GPA = $request->getParam('GPA');
  $Email = $request->getParam('Email');
  $CellNo = $request->getParam('CellNo');
  $Department_Name = $request->getParam('Department_Name');
  $Password = $request->getParam('Password');

$sql = "INSERT INTO student (S_ID, Name, GPA, Email, CellNo, Department_Name, Password) VALUES(:S_ID, :Name, :GPA, :Email, :CellNo, :Department_Name, :Password)";

try{
$db =new db();
$db = $db->connect();

$stmt = $db->prepare($sql);
$stmt->bindParam(':S_ID', $S_ID);
$stmt->bindParam(':Name', $Name);
$stmt->bindParam(':GPA', $GPA);
$stmt->bindParam(':Email', $Email);
$stmt->bindParam(':CellNo', $CellNo);
$stmt->bindParam(':Department_Name', $Department_Name);
$stmt->bindParam(':Password', $Password);

$stmt->execute();

echo '{"notice":{"student Added"}';
}catch(PDOException $e){
  echo '{"error": {"text": '.$e->getMessage().'}';
}



});
