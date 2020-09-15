<?php
session_start();

if(!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

	$query = "SELECT * FROM peralatan_elektronik
	 			JOIN peralatan_jenis_barang
	 			ON peralatan_jenis_barang.id = peralatan_elektronik.jenis";
	$peralatan = query($query);

	if(isset($_GET['search'])) {
		$keyword = $_GET['keyword'];
		$query_search = "SELECT * FROM peralatan_elektronik
						JOIN peralatan_jenis_barang
						ON peralatan_jenis_barang.id = peralatan_elektronik.jenis 
						WHERE
						nama LIKE '%$keyword%' OR
						peralatan_jenis_barang.jenis LIKE '%$keyword%' OR
						merek LIKE '%$keyword%' OR
						harga LIKE '%$keyword%'";
		$peralatan = query($query_search);
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
	<title>Admin</title>

	<!-- My Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../scripts/bootstrap.css">
    <!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

	<!-- PDF Reporting -->
	<style>
		@media print{
			.administrator, .button, .form-search, .option, .foot{
				display: none;
				}
			}
	</style>

</head>
<body>

	<br>
	
		<h1 align="center" class="administrator">Administrator Page</h1>

		<hr>
	
		<center>

			<form class="button">
				<a href="plus.php"><button type="button" name="plus" class="btn-xs btn-success">Add Data</button></a> | 
				<a href="logout.php"><button type="button" name="logout" class="btn-xs btn-warning">Logout</button></a>
			</form>

			<br>

			<form action="" method="get" class="form-search">
				<input type="text" name="keyword" size="45" autofocus placeholder="Enter keyword..." autocomplete="off" id="keyword">
				<button type="submit" name="search" id="search-button" class="btn-xs btn-info">Search!</button>
			</form>

		</center>

	<br>

	<div id="boxhead" class="w-100">

		<table border="4" cellpadding="10" cellspacing="1" width="75%" align="center">

				<tr width="25%" align="center">
					<th><h2>No</h2></th>
					<th class="option"><h2>Option</h2></th>
					<th><h2>Gambar</h2></th>
					<th><h2>Nama Produk</h2></th>
					<th><h2>Jenis Peralatan</h2></th>
					<th><h2>Merek Perusahaan</h2></th>
					<th><h2>Harga</h2></th>
				</tr>

			<?php if(empty($peralatan)) : ?>
				<tr>
					<td colspan="7">Data is not found!</td>
				</tr>
			<?php endif; ?>

			<?php $no = 1; ?>

			<?php foreach ($peralatan as $per): ?>

				<tr>
					<td align ="center"><?php echo $no++; ?></td>

					<td align ="center" class="option">
						<a href="update.php?id=<?=$per['id'];?>"><button type="button" class="btn-xs btn-info">Edit</button></a>
						<br>
						<a href="delete.php?id=<?=$per['id'];?>" onclick="return confirm('Are you sure want to delete this data?')"><button type="button" class="btn-xs btn-danger">Delete</button></a>
					</td>

					<td align ="center"><img src="../assets/images/peralatan/<?php echo $per['gambar'] ?>" width="100px"></td>
					<td align ="center"><?php echo $per["nama"] ?></td>
					<td align ="center"><?php echo $per["jenis"] ?></td>
					<td align ="center"><?php echo $per["merek"] ?></td>
					<td align ="center"><?php echo $per["harga"] ?></td>
				</tr>

			<?php endforeach; ?>

		</table>

	</div>

		<br>

	<!-- footer -->
    <footer class="foot">
      	<div class="footer text-center">
	       	<div class="w-100">
	        	<p>&copy; copyright 2019 | built by <a href="https://about.me/adityafd" target="_blank">Aditya Fataha Dwijaya</a> | 183040115 | University of Pasundan</p>
	        </div>
      	</div>
    </footer>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.jquery-3.3.1.slim.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.popper.min.js"></script>
    <script src="../javas/ajax2.js"></script>

</body>
</html>