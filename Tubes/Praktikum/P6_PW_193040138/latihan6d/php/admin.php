<?php 
	require 'functions.php';

	$bukubuku = query("SELECT * FROM bukubuku");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Buku</title>
 </head>
 <body>
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
 		<?php $i = 1; ?>
 		<?php foreach ($bukubuku as $buku) : ?>
 			<tr>
 				<td><?= $i; ?></td>
 				<td>
 					<a href=""><button>Ubah</button></a>
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