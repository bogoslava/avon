<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css"> 
    <title>Auth</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-4">
        <fieldset>
            <form action="user/login.php" method="post">
                
                <legend>Login</legend>
                <div class="form-group">
                    <h4><?php echo $_SESSION['statuslogin']; ?></h4>
                </div>
                <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input class="form-control" name="email" id="inputEmail" placeholder="Email" type="text" required>
                </div>
                </div>
                <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <input class="form-control" name="password" id="inputPassword" placeholder="Password" type="password" required>
                </div>
                </div>
                
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="index.html" class="btn btn-default">Back To home page</a>
                    </div>
                </div>
            </fieldset>
            </form>
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-4">
        <fieldset>
            <form action="user/regiser.php" method="post">
                <legend>Regiser</legend>
                <div class="form-group">
                    <h4><?php echo $_SESSION['statusregiser']; ?></h4>
                </div>
                <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input class="form-control" name="email" id="inputEmail" placeholder="Email" type="text" required>
                </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="password1" id="inputPassword" placeholder="Password" type="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-8 control-label">Password Confirm</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="password2" id="inputPassword" placeholder="Password Confirm" type="password" required>
                    </div>
                </div>
                
                <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Regiser</button>
                </div>
                </div>
            </fieldset>
            </form>
        </div>
        <div class="col-sm-1">  
        </div>
    </div>
    <?php

    ?>
</body>
</html>