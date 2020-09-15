<?php

require 'functions.php';

if(isset($_GET['search'])) {
    $keyword = $_GET['s'];
    $peralatan = query("SELECT * FROM peralatan_elektronik WHERE
				nama LIKE '%$keyword%' OR
				jenis LIKE '%$keyword%' OR
				merek LIKE '%$keyword%' OR
				harga LIKE '%$keyword%'");
    }

?>