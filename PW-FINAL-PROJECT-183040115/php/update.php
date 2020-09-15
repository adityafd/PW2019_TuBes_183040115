<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];
$per = query("SELECT * FROM peralatan_elektronik WHERE id = $id")[0];

if(isset($_POST['update'])){
    if(update($_POST) > 0 ){
        echo 
        "<script>
        	alert('Data successfully updated!');
            document.location.href = 'admin.php';
        </script>";
    }else{
        echo 
        "<script>
            alert('Data failed updated!');
            document.location.href = 'admin.php';
        </script>";
    }
}

if(isset($_POST['gambar'])){
    $allowed    = array('png','jpg','jpeg');
    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extensions = strtolower(end($x));
    $size   = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];  
        if(in_array($extensions, $allowed) === true){
            if($size < 1044070){            
            move_uploaded_file($file_tmp, 'gambar/'.$gambar);
            $query = mysql_query("INSERT INTO peralatan_elektronik VALUES(NULL, '$gambar')");
            if($query){
                echo 'Successfully uploaded!';
            }else{
                echo 'The file upload Failed!';
            }
            }else{
            echo 'The file is too big!';
            }
            }else{
            echo 'The file extensions is not allowed!';
            }
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
	<title>Update</title>

	<!-- My Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../scripts/bootstrap.css">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

</head>
<body>

	<br><h1 align="center">Add Data</h1><hr>

    <center>

    <div>
      	<form action="" method="post" enctype="multipart/form-data">
        	<div>

	            <input type="hidden" name="id" value="<?=$per["id"];?>">

        		<label for="nama">Nama    </label><br>
        		<input type="text" name="nama" id="nama" value="<?=$per['nama'];?>"><br><br>

        		<label for="jenis">Jenis  </label><br>
        		<input type="text" name="jenis" id="jenis" value="<?=$per['jenis'];?>"><br><br>

        		<label for="merek">Merek  </label><br>
        		<input type="text" name="merek" id="merek" value="<?=$per['merek'];?>"><br><br>

        		<label for="harga">Harga  </label><br>
        		<input type="text" name="harga" id="harga" value="<?=$per['harga'];?>"><br><br>

                <label for="gambar">gambar  </label><br>
                <input type="file" name="gambar" id="gambar" value="<?=$per['gambar'];?>"><br><br>

	            <button type="submit" name="update" class="btn-xs btn-primary">Update</button> | 
	            <a href="admin.php"><button type="button" name="return" class="btn-xs btn-warning">Back</button></a>

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