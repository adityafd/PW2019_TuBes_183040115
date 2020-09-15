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

<table border="4" cellpadding="9" cellspacing="1" width="75%" align="center" id="boxhead">

				<tr width="25%" align="center">
					<th><h2>No</h2></th>
					<th><h2>Option</h2></th>
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

					<td align ="center"><img src="../assets/images/peralatan/<?php echo $per['gambar'] ?>" width = "100px"></td>
					<td align ="center"><?php echo $per["nama"] ?></td>
					<td align ="center"><?php echo $per["jenis"] ?></td>
					<td align ="center"><?php echo $per["merek"] ?></td>
					<td align ="center"><?php echo $per["harga"] ?></td>
				</tr>

	<?php endforeach; ?>

</table>