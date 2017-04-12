<?php
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['user_type'])) {
    if($_SESSION['user_type'] == "USER") {
        header("location: user-profile.html");
        exit();
    } else {
        header("location: company-profile.html");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log In | My Live Love</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/forms.css"/>

</head>

<body>
<nav id="topNav" class="navbar static-top navbar-toggleable-sm navbar-inverse bg-inverse">
    <div class="navbar-collapse collapse">
        <!--Hack to center navbar brand relatively-->
    </div>
    <a class="navbar-brand mx-auto font-bold" href="home.php">
        <img src="img/mylivelovewhite.png" class="d-inline-block align-middle" width="50" height="50" alt="">
    </a>
    <button class="navbar-toggler navbar-toggler-right navbar-drawer-expand" type="button" data-toggle="collapse"
            data-target="#mobileLogin">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="windowsLogin" class="navbar-collapse collapse">
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link mylivelove-font" style="color:whitesmoke;" href="company-profile.html">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mylivelove-font" style="color:#C11D1F;" href="#">Sign up</a>
            </li>
        </ul>
    </div>

    <div id="mobileLogin" class="collapse">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Signup</a>
            </li>
        </ul>
    </div>
</nav>
<!--Navbar end-->

<div class="container">
    <h2 style="text-align:center">Login</h2>

    <form id = "loginForm" class="form-signin" role="form">
        <h4 class="form-signin-heading"></h4>
        <input type="text" class="form-control"
               id="username" placeholder="username "
               required autofocus>
        <input type="password" class="form-control"
               id="password" placeholder="password " required>
        <button class="button" type="submit"
                id="login">Login
        </button>
    </form>

    <div style="text-align:center">
        <a href="">Forgot password?</a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="js/login.js"></script>

</body>
</html>
