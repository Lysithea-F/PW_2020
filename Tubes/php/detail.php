<?php 
	require 'index.php';
	$id = $_GET['id'];
	$m = query("SELECT * FROM bukubuku WHERE id = $id")[0];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Buku</title>
</head>
<body>
	<h3>Detail Buku</h3>
	<ul>
		<li><img src="img/<?= $b['img']; ?>"></li>
		<li>Nama Buku : <?= $buku['nama']; ?></li>
		<li>Penulis : <?= $b['penulis']; ?></li>
		<li>Halaman : <?= $buku['halaman']; ?></li>
		<li>Penerbit: <?= $buku['penerbit']; ?></li>
		<li><a href="">Ubah</a> |  <a href="">Hapus</a></li>
		<li><a href="../index.php">Kembali</a></li>
	</ul>

</body>
</html>