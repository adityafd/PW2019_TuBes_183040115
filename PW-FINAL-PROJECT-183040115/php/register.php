<?php

require 'functions.php';

    if(isset($_POST['register'])){
        if(register($_POST) > 0) {
            echo 
            "<script>
                alert('Successful Registration!');
                document.location.href = 'login.php';
            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }

?>

<?php
    if(isset($_POST["return"])) {
        header("Location: login.php");
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
	<title>Register</title>

	<!-- My Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../scripts/bootstrap.css">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

</head>
<body>

	<br><h1 align="center">Register</h1><hr>

	<center>

    <div>
      	<form action="" method="post">
        	<div>

	            <div class="form-group">
	                <label for="username">Username :</label><br>
	                <input type="text" name="username" id="username" required><br><br>
	            </div>

	            <div class="form-group">
	                <label for="password">Password :</label><br>
	                <input type="password" name="password1" id="password1" required><br><br>
	            </div>

	            <div class="form-group">
	                <label for="password">Confirm Password :</label><br>
	                <input type="password" name="password2" id="password2" required><br><br>
	            </div>

	            <button type="submit" name="register" class="btn-xs btn-success">Send</button>
	            <a href="login.php"><button type="button" name="return" class="btn-xs btn-warning">Back</button></a>

        	</div>
      	</form>
    </div>

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