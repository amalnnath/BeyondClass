<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;



$app = new \Slim\App;


$app->get('/info/{S_ID}', function(Request $request, Response $response){
  $S_ID = $request->getAttribute('S_ID');
$sql = "SELECT Name, GPA FROM student where S_ID = $S_ID";

try{
$db =new db();
$db = $db->connect();

$stmt = $db->query($sql);
$student = $stmt->fetchAll(PDO::FETCH_OBJ);
$db = null;

$result = json_encode($student,JSON_PRETTY_PRINT);
print_r($result);






}catch(PDOException $e){
  echo '{"error": {"text": '.$e->getMessage().'}';
}



});
