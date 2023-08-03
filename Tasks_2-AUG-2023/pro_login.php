<?php

session_start();

$valid_username = 'Marah';
$valid_email = 'Marah1312@gmail.com';
$valid_password = 'pass123';

if(isset($_GET['uname']) && isset($_GET['passw']) && isset($_GET['mail'])){
    $submitted_username = $_GET['uname'];
    $submitted_email = $_GET['mail'];
    $submitted_password = $_GET['passw'];

    if($submitted_username === $valid_username && $submitted_password === $valid_password && $submitted_email === $valid_email){
        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $submitted_username;

        header('Location: calculator.php');    //to redirect into a new page
        exit;

    }
    else{
        echo "Invalid Username or Password . <a href='http://localhost/PHP/2-AUG/Login/login.php'>Please Try Again.</a>";
    }

}

?>
