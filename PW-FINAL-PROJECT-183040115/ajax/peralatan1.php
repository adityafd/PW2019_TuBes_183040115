<?php
require '../php/functions.php';

$keyword = $_GET["keyword"];
$query_search = "SELECT * FROM peralatan_elektronik
				JOIN peralatan_jenis_barang
				ON peralatan_jenis_barang.id = peralatan_elektronik.jenis 
				WHERE
				nama LIKE '%$keyword%' OR
				peralatan_jenis_barang.jenis LIKE '%$keyword%' OR
				merek LIKE '%$keyword%' OR
				harga LIKE '%$keyword%'";
$peralatan = query($query_search);

?>

<div class="container" id="boxhead">

	<?php foreach ($peralatan as $per) : ?>

		<div class="content">

		    <h3>
		        <p class="jenis"><?= $per['jenis']; ?></p>
		    </h3>

		    <div class="gambar">
		        <img src="assets/images/peralatan/<?= $per['gambar']; ?>" width="200">
		    </div>

		        <p class="nama">
					<a href="php/profile.php?id=<?= $per['id']; ?>"><?= $per['nama']; ?></a>
				</p>

	<?php endforeach; ?>

	<?php if(empty($peralatan)) : ?>

				<tr>
					<td colspan="7">Data is not found!</td>
				</tr>

	<?php endif; ?>

		</div>

</div>