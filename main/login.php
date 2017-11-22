<?php
/*
VERSION 1.3.1
*/

session_start();

if(isset($_SESSION['username'])) {
        header("Location: /beyondclass/index.php");
}
else{

    if(isset($_POST['login'])) {
        include_once("db.php");
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
        $sql = "SELECT * FROM STUDENT WHERE S_ID='$username' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $db_password = $row['CellNo'];

        if($username && $password){
            if($password == $db_password) {
                echo "CORRECT LOGIN INFO";

                $_SESSION['username'] = $username; 
                $_SESSION['name'] = $row['Name'];
                $_SESSION['dept'] = $row['Department_Name'];
                header("Location: /beyondclass/index.php");         

            } 
            else {
                echo "INCORRECT LOGIN INFO";
                echo "DATABASE:";
                echo $db_password;
                echo "PROVIDED:";
                echo $password;
            }
        }

    }

}

?>
 