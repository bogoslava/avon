<?php
session_start();

$_SESSION["statuslogin"] = "";
$_SESSION["statusregiser"] = "";
$_SESSION["accsess"] = "false";

header("Location: auth.php");
?>