<?php
session_start();
require 'functions.php';

// cookie check
if(isset($_COOKIE['key']) && isset($_COOKIE['hole'])) {
    $key    = $_COOKIE['key'];
    $hole   = $_COOKIE['hole'];

    // take username based on id
    $cek_user = mysqli_query($conn, "SELECT username FROM user_account WHERE key = $key");
    $row = mysqli_fetch_assoc($cek_user);

    // cookie & username check
    if($hole == hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION['login'])) {
    header("Location: admin.php");
    exit;
}

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $cek_user = mysqli_query($conn, "SELECT * FROM user_account WHERE username = '$username'");

        // username check
        if(mysqli_num_rows($cek_user) == 1) {
        // password check
            $row = mysqli_fetch_assoc($cek_user);
            if(password_verify($password, $row['password'])) {
            // successfull login
                $_SESSION['login'] = true;

            // remember check
                if (isset($_POST['remember'])) {
                    // made cookie
                    setcookie('key', $row['id'], time()+60);
                    setcookie('hole', hash('sha256', $row['username']), time()+60);
                }

                header("Location: admin.php");
                exit;
            } else {
            // failed login
            $error = 'wrong password!';
            }
        } else {
            // failed login
            $error = 'username hasnt register!';
        }
    }

    if(isset($_POST["register"])) {
        header("Location: register.php");
    }

?>

 <!DOCTYPE html>
 <html>
 <head>

 	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, 
    shrink-to-fit=yes">

    <!-- Page Title -->
 	<title>Login</title>

	<!-- My Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../scripts/bootstrap.css">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

 </head>
 <body>
 	
 	<br><h1 align="center">Login</h1><hr>

        <center>

            <img src="../assets/images/others/PR.png" width="200" height="200">

            <?php if(isset($error)){?>
            	<p style="color:red;"><i><?= $error; ?></i></p>
            <?php } ?>

            <form action="" method="post">

                <br>
                    <input type="text" name="username" id="username" placeholder="username">
                <br><br>
                    <input type="password" name="password" id="password" placeholder="password" >
                <br><br>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                <br><br>
                    <button type="submit" name="login" class="btn-xs btn-primary">Login</button> | 
                    <button type="submit" name="register" class="btn-xs btn-success">Register</button>
                <br>

            </form>

        </center>

 	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.jquery-3.3.1.slim.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.popper.min.js"></script>

 </body>
 </html>