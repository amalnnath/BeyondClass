<?php
    session_start();
    if(isset($_SESSION['username'])) {
            header("Location: /beyondclass/index.php");
    }
    else{
        if(isset($_POST['login'])) {
            include_once("db.php");

            /*Store form information in local variables*/
            $username = $_POST['username'];
            $password = $_POST['password'];
            $username = mysqli_real_escape_string($db, $username);
            $password = mysqli_real_escape_string($db, $password);

            /*Find user in table*/
            $sql = "SELECT * FROM TUTOR WHERE Tutor_ID='$username' LIMIT 1";
            $query = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($query);
            $db_password = $row['Password'];


            if($username && $password){
                /*Check if password is equal, set sessions and redirect*/
                if(md5($password) == $db_password) {
                    echo "CORRECT LOGIN INFO";
                    $_SESSION['username'] = $username; 
                    $_SESSION['name'] = $row['Name'];
                    $_SESSION['dept'] = $row['Department_Name'];
                    $_SESSION['title'] = 'Tutor';
                    header("Location: /beyondclass/index.php");         
                } 
                else {
                    /*If password is not equal, check Student table*/
                    $sql = "SELECT * FROM STUDENT WHERE S_ID='$username' LIMIT 1";
                    $query = mysqli_query($db, $sql);
                    $row = mysqli_fetch_array($query);
                    $db_password = $row['Password'];
                    /*If password is correct, set sessions and redirect*/
                    if(md5($password) == $db_password) {
                        $_SESSION['username'] = $username; 
                        $_SESSION['name'] = $row['Name'];
                        $_SESSION['dept'] = $row['Department_Name'];
                        if($username == '0000'){
                            $_SESSION['title'] = 'Admin';
                        }
                        else{
                            $_SESSION['title'] = 'Student';
                        }
                        header("Location: /beyondclass/index.php");
                    } 
                }
            }
        }
    }
?>
<br>
<p>If you're reading this, you were unable to log in!</p>
<a href="/beyondclass/index.php">Go Home</a>
 