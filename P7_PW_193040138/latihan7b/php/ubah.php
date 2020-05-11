<!DOCTYPE html>
<html>
<head>
	<title>Tambah Daftar Buku</title>
</head>
<body>
	<h3>Ubah Daftar Buku</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama : </label><br>
				<input type="text" name="nama" id="nama" required><br><br>
			</li>
			<li>
				<label for="penulis">Penulis : </label><br>
				<input type="text" name="penulis" id="penulis" required><br><br>
			</li>
			<li>
				<label for="halaman">Halaman : </label><br>
				<input type="text" name="halaman" id="halaman" required><br><br>
			</li>
			<li>
				<label for="penerbit">Penerbit : </label><br>
				<input type="text" name="penerbit" id="penerbit" required><br><br>
			</li>
			<br>
			<button type="submit" name="tambah">Tambah Data</button>
			<button type="submit">
				<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
			<button type="submit"><a href="hapus.php?id=<? $buku['id'] ?>" onclick="return confirm('Hapus Data?')">Hapus</a></button>
		</ul>
	</form>

	<?php 
		require 'functions.php';

		$id = $_GET['id'];
		$buku = query("SELECT * FROM bukubuku WHERE id = $id")[0];

		if (isset($_POST['ubah'])) {
			if (tambah($_POST) > 0) {
				echo "<script>
							alert('Data Berhasil diubah');
							document.location.href = 'admin.php';
					 </script>"	;
			} else {
				echo "<script> 
							alert ('Data Gagal diubah');
							document.location.href = 'admin.php';
					</script>";
			}
		}
	 ?>

</body>
</html>