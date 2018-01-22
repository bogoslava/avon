<?php
session_start();
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    if ($password1 === $password2){

    }else{
        $_SESSION['statuslogin'] = "";
        $_SESSION['statusregiser'] = "You password does not much";
        var_dump($_SESSION);
        header("Location: ../auth.php");
    }

?>
