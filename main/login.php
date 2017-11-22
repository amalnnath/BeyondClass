<?php
/*
VERSION 1.2.5
*/
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
                } 
            else {
               echo "INCORRECT LOGIN INFO";
            }
        }

}

?>
 