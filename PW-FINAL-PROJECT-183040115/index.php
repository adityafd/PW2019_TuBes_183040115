<?php 

require 'php/functions.php';
	$query = "SELECT * FROM peralatan_elektronik
	 			JOIN peralatan_jenis_barang
	 			ON peralatan_jenis_barang.id = peralatan_elektronik.jenis";
	$peralatan = query($query);

	if(isset($_GET["search"])) {
		$peralatan = search($_GET["keyword"]);
	}

	if(isset($_GET["login"])) {
		header("Location: php/login.php");
	}

?>

<!DOCTYPE html>
<html><head>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, 
    shrink-to-fit=yes">

    <!-- Page Title -->
	<title>Index - Halaman User</title>

	<!-- My Bootstrap -->
    <link rel="stylesheet" type="text/css" href="scripts/bootstrap.css">
    <!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>

	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom" role="navigation">

      <div class="box-fluid">

      	<form action="" method="get">

	      	<a class="navbar-brand page-scroll" href="https://about.me/adityafd" target="_blank"><img src="assets/images/others/ADIT.png" width="75" height="50"></a>

		    <input type="text" name="keyword" size="30" autofocus="" placeholder="Enter keyword..." autocomplete="off" id="keyword">
			<button type="submit" name="search" id="search-button" class="btn-xs btn-info">Search!</button>

			<button type="submit" name="login" class="btn-xs btn-warning">Sign-In</button>

		</form>

      </div>

    </nav>

    <br><h1 align="center">Macam-macam Peralatan Elektronik</h1><hr>

		<center>

		<div id="boxhead">

		 	<div class="container">
		 		
		        <div class="content">
		        	<h3>
		        		<p class="jenis">Lampu</p>
		        	</h3>

		           	<div class="gambar">
		                <img src="assets/images/peralatan/Lampu.jpg" width="200">
		           	</div>

			            <p class="nama">
							<a href="php/profile.php?id=1">LED Anti Nyamuk - 9 watt</a>
						</p>

				
		        <div class="content">
		        	<h3>
		        		<p class="jenis">Kompor</p>
		        	</h3>

		           	<div class="gambar">
		                <img src="assets/images/peralatan/Kompor.jpg" width="200">
		           	</div>

			            <p class="nama">
							<a href="php/profile.php?id=2">Rinnai Gas Stove RI-522S-Black</a>
						</p>

				
		        <div class="content">
		        	<h3>
		        		<p class="jenis">Kulkas</p>
		        	</h3>

		           	<div class="gambar">
		                <img src="assets/images/peralatan/Kulkas.jpg" width="200">
		           	</div>

			            <p class="nama">
							<a href="php/profile.php?id=3">KULKAS 2 PINTU SAMSUNG RT38K5032S8 Twin Cooling 384 LITER</a>
						</p>

				
		        <div class="content">
		        	<h3>
		        		<p class="jenis">Blender</p>
		        	</h3>

		           	<div class="gambar">
		                <img src="assets/images/peralatan/Blender.jpg" width="200">
		           	</div>

			            <p class="nama">
							<a href="php/profile.php?id=4">Blender Plastik Cosmos Stainless Steel 3in1 2 liter CB-282P CB282P</a>
						</p>

				
		        <div class="content">
		        	<h3>
		        		<p class="jenis">Vacuum (Pembersih Debu)</p>
		        	</h3>

		           	<div class="gambar">
		                <img src="assets/images/peralatan/Vacuum.jpg" width="200">
		           	</div>

			            <p class="nama">
							<a href="php/profile.php?id=5">VC 2050 Vacuum Cleaner</a>
						</p>

				
		        <div class="content">
		        	<h3>
		        		<p class="jenis">Rice Cooker (Pemasak Nasi)</p>
		        	</h3>

		           	<div class="gambar">
		                <img src="assets/images/peralatan/Rice Cooker.jpg" width="200">
		           	</div>

			            <p class="nama">
							<a href="php/profile.php?id=6">Rice Cooker Philips HD3127</a>
						</p>

				
		        <div class="content">
		        	<h3>
		        		<p class="jenis">Kipas Angin</p>
		        	</h3>

		           	<div class="gambar">
		                <img src="assets/images/peralatan/Kipas Angin.jpg" width="200">
		           	</div>

			            <p class="nama">
							<a href="php/profile.php?id=7">KRISBOW Ventilator Fan</a>
						</p>

				
		        <div class="content">
		        	<h3>
		        		<p class="jenis">Telepon Kabel</p>
		        	</h3>

		           	<div class="gambar">
		                <img src="assets/images/peralatan/Telepon Kabel.jpeg" width="200">
		           	</div>

			            <p class="nama">
							<a href="php/profile.php?id=8">Panasonic Telephone KX-TS505</a>
						</p>

				
		        <div class="content">
		        	<h3>
		        		<p class="jenis">Radio</p>
		        	</h3>

		           	<div class="gambar">
		                <img src="assets/images/peralatan/Radio.jpg" width="200">
		           	</div>

			            <p class="nama">
							<a href="php/profile.php?id=9">Radio Klasik International F 18 Model Jadul AM FM</a>
						</p>


				<div class="content">
		        	<h3>
		        		<p class="jenis">Mesin Cuci</p>
		        	</h3>

		           	<div class="gambar">
		                <img src="assets/images/peralatan/Mesin Cuci.jpg" width="200">
		           	</div>

			            <p class="nama">
							<a href="php/profile.php?id=10">Sharp ES-FL862 Front Loading Boomerang Series</a>
						</p>
				
					
		        </div>

		 	</div>

		</div>

	 	</div></div></div></div></div></div></div></div></div></center>

	<br><br>
	<br><br>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/bootstrap.jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.popper.min.js"></script>
	<script src="javas/ajax1.js"></script>


</body></html>