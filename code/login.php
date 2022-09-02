<?php
include('db_conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/e5f052c807.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login</title>
</head>
<body>
    
<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="logincheck.php" method="post">
                        <h1 class="text-center text-info" style="font-family: 'Caveat', cursive;">Lynnlin</h1>
                        <br/>
                        <div class="form-group">
                            <input type="text" name="Account" id="Account" class="form-control" placeholder="Username">
                        </div>
                        <br/>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label>
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="signup.php" class="text-info">Register here</a>
                        </div>
                        <br/>
                        <div class="form-group text-center">
                            <input type="submit" name="submit" class="btn btn-info" value="Login" style="background-color:#4F6D7A;border-radius: .45rem; width: 300px;">
                        </div>
                    </form>
                </div>
                <div class="wrapper"></div>
            </div>
        </div>
    </div>
</body>
</html>