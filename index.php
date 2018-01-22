<?php
session_start();

$_SESSION["statuslogin"] = "";
$_SESSION["statusregiser"] = "";

header("Location: auth.php");
?>