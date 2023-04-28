<?php
    session_start();
 
    //Include database connection details
    require_once('conn.php');


print("validation.php");
$username = $_POST['userID'];
$password = $_POST['pass'];


print($username);
// print($password)

// $name = $_POST['name'];
// $address = $_POST['address'];
// $Licenseno = $_POST['Licenseno'];



    $query="SELECT * FROM customer WHERE username='$username' AND password='$password'";
    mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
    $result=mysqli_query($conn, $query);
 
    //Check whether the query was successful or not
    if($result) {
        if(mysqli_num_rows($result) > 0) {
            //Login Successful
            session_regenerate_id();
            $member = mysqli_fetch_assoc($result);
            print($member);

            $_SESSION['username'] = $member['username'];
            
             //$_SESSION['SESS_PASSWORD'] = $member['password'];
            
            session_write_close();
            header("location: home.php");
            exit();
        }else {
            //Login failed
            header("location: login.php");
            exit();
            
        }
    }else {
        die("Query failed");
    }


?>