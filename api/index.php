<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');


/**
 * REST API method that says hello to the name specified
 */
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});


/**
 * Return a list of users encoded as JSON
 */
$app->get('/getUsers', function () {
    $db_user = '';
    $db_pass = '';
    $db_name = '';
    $users = array();

    // Connect to mysql
    $mysqli = new mysqli("localhost", $db_user, $db_pass, $db_name);

    // check connection
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    /* Get the list of users in an array */
    if ($stmt = $mysqli->prepare("SELECT username FROM ucsc_members"))
    {
        /* execute query */
        $stmt->execute();

        /* bind result variables */
        $stmt->bind_result($username);

        // add each user
        while ($stmt->fetch())
        {
            array_push($users, $username);
        }

        /* close statement */
        $stmt->close();
    }  

    // Encode the array of users as JSON
    echo json_encode($users);
});


// Launch the API service
$app->run();
