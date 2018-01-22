<?php
session_start();
include_once "DB.php";

    if($_POST['email'] != "" && $_POST['password'] != ""){
        $foo = new DB();
        $conn = $foo->{'DataBase'}();
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `$conn[0]`.`users` WHERE email=\"$email\";";
        $result = $conn[1]->query($sql);

        $arr = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               array_push($arr,$row);
            }
            if($arr[0]['password'] === $password) {
                $_SESSION["accsess"] = "true";
                $_SESSION['email'] = $email;
                header("Location: welcome.php");
            }else{
                $_SESSION["statuslogin"] = "Wrong password";
                $_SESSION["statusregiser"] = "";
                header("Location: ../auth.php");
            }
        } else {
            $_SESSION["statuslogin"] = "First you need to register first";
            $_SESSION["statusregiser"] = "";
            header("Location: ../auth.php");
        }
    }else{
        header("Location: ../index1.php");
    }
?>
