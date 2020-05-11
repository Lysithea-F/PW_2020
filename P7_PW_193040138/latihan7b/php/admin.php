<?php 
	require 'functions.php';

	if (isset($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$bukubuku = query("SELECT * FROM bukubuku WHERE
			img LIKE '%$keyword%' OR
			nama LIKE '%$keyword%' OR
			penulis LIKE '%$keyword%' OR
			halaman LIKE '%$keyword%' OR
			penerbit LIKE '%$keyword%' ");
	} else {
	$bukubuku = query("SELECT * FROM bukubuku");
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Buku</title>
 </head>
 <body>
 	<form action="" method="get">
 		<input type="text" name="keyword" autofocus>
 		<button type="submit" name="cari">Cari</button>
 	</form>
 	<div class="logout">
 		<a href="logout.php">Logout</a>
 	</div>
 	<table border="1" cellpadding="13" cellspacing="0">
 		<tr>
 			<th>#</th>
 			<th>Opsi</th>
 			<th>Foto</th>
 			<th>Nama Buku</th>
 			<th>Penulis</th>
 			<th>Halaman</th>
 			<th>Penerbit</th>
 		</tr>
 		<?php if (empty($bukubuku)): ?>
 			<tr>
 				<td colspan="7">
 					<h1>Data tidak ditemukan</h1>
 				</td>
 			</tr>
 		<?php else: ?>
 		<?php endif ?>
 		<?php $i = 1; ?>
 		<?php foreach ($bukubuku as $buku) : ?>
 			<tr>
 				<td><?= $i; ?></td>
 				<td>
 					<a href="ubah.php?id=<?= $bukubuku['id'] ?>"><button>Ubah</button></a>
 					<a href=""><button>Hapus</button></a>
 				</td>
 				<td><img src="../assets/img/<?= $buku['img']; ?>"></td>
 				<td><?= $buku['nama']; ?></td>
 				<td><?= $buku['penulis']; ?></td>
 				<td><?= $buku['halaman']; ?></td>
 				<td><?= $buku['penerbit']; ?></td>
 			</tr>
 			<?php $i++; ?>
 		<?php endforeach; ?>
 	</table>
 
 </body>
 </html>