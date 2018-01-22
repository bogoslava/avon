<?php
session_start();
include_once 'DB.php';
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        if ($password1 === $password2){
            $foo = new DB();
            $res = $foo->{'DataBase'}();

            $sql = "SELECT *FROM `$res[0]`.`users` WHERE `email` = \"$email\";";
            $emailResult = $res[1]->query($sql);
            // $emailTesting = $emailResult->fetch_assoc();

            if ($emailResult->num_rows > 0) {
                $_SESSION['statuslogin'] = "";
                $_SESSION['statusregiser'] ="The Email alredy used";
                header("Location: ../auth.php");
            } else {
                $sql = "INSERT INTO `$res[0]`.`users` (`Email`, `password`) VALUES ('$email', '$password1');";
                if($res[1]->query($sql) === TRUE){
                    $_SESSION['statuslogin'] = "";
                    $_SESSION['statusregiser'] ="Created successful";
                    header("Location: ../auth.php");
                }
            }
        }else{
            $_SESSION['statuslogin'] = "";
            $_SESSION['statusregiser'] = "You password does not much";
            // var_dump($_SESSION);
            header("Location: ../auth.php");
        }
    } else {
        $_SESSION['statuslogin'] = "";
        $_SESSION['statusregiser'] ="Email address '$email' is considered invalid.";
        header("Location: ../auth.php");
    }

    
?>
