<?php
session_start();
    if($_SESSION['accsess'] === "true"){
    }else{
        $_SESSION["statuslogin"] = "First you need to loged in";
        $_SESSION["statusregiser"] = "";
        header("Location: ../auth.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="../style/style.css"> 
</head>
<body>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="card border-success mb-3" style="max-width: 20rem;">
                <div class="card-header">Welcome</div>
                    <div class="card-body text-success">
                        <h4 class="card-title">Hello <?php  echo $_SESSION['email'];?></h4>
                        <form action="logout.php">
                            <input class="btn btn-primary" type="submit" value="Logout">
                        </form>
                    </div>
            </div>
        </div>
        <div class="col-sm-4">
        </div>
    </div>

</body>
</html>


