<?php
    session_start();
    if($_SESSION['accsess'] != "true"){
        header("Location: ../index.php");
    }
    var_dump($_SESSION);
?>
