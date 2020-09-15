<?php 

require 'functions.php';
$id = $_GET['id'];


$per = query("SELECT * FROM peralatan_elektronik WHERE id = $id")[0];

	if(isset($_POST["return"])) {
		header("Location: ../index.php");
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
	<title>Keterangan</title>

	<!-- My Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../scripts/bootstrap.css">
    <!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

</head>
<body>

	<br><h1 align="center">Keterangan</h1><hr>

	<center>

	   	<div class="content">

		   	<table border="4" cellpadding="10" cellspacing="1" width="35%" align="center">

		   		<tr width="35%" align="center" bgcolor="white">
			        <div class="gambar">
			            <td>
			            	<img src="../assets/images/peralatan/<?= $per['gambar']; ?>" width="150">
			            </td>
			        </div>
			    </tr>

			    <tr width="35%" align="center" bgcolor="aqua">
					<div class="desc">
			            <td>

				            <p class="nama"> 
				            	
				            	<?= $per['nama']; ?>
				            		
				            </p>

							<p class="merek"> 

								<?= $per['merek']; ?>
								
							</p>

							<p class="jenis"> 

								<?= $per['jenis']; ?>, <?= $per['harga']; ?>
								
							</p>

							<form action="" method="post">
								<button type="submit" name="return" class="btn-xs btn-warning">Return</button>
							</form>

						</td>
					</div>
				</tr>

			</table>

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