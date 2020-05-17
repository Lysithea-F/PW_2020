<?php 
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: Login.php");
		exit;
	}
	
	require 'functions.php';

	if(isset($_POST['tambah'])) {
		if (tambah($_POST) > 0) {
			echo "<script>
					alert ('Data Berhasil ditambahkan!');
					documen.location.href = 'admin.php';
				</script>";
		} else {
			echo "<script>
					alert('Data Gagal ditambahkan!');
					document.location.href = 'admin.php';
				</script>";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>

	<style type="text/css">
		label {
			font-color: white;
		}
	</style>
	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
 		<div id="home" class="navbar-fixed">
		<nav class="light-blue darken-2">
			<div class="container">
		   		<div class="nav-wrapper">
		     		<a href="../index.php" class="brand-logo"><b>Tugas Besar</b></a>
		     			<ul id="nav-mobile" class="right hide-on-med-and-down">
		       				<li><a href="tambah.php">Tambah Data</a></li>
		       				<li><a href="">Log Out</a></li>
		     			</ul>
		   		</div>
		    </div>
		</nav>
	</div>

	 <!-- Sidenav -->
	 <ul class="sidenav" id="mobile-nav">
	 	<li><a href="tambah.php">Tambah Data</a></li>
	 	<li><a href=""></a>Log Out</li>
	 </ul>

	 <!-- Isi -->

	<div class="container">
	  <div class="row">
	      <div class="card deep-purple">
	        <div class="card-content white-text">
	          <span class="card-title center"><H4><b>Tambah Data</b></H4></span>
	          	<form action="" method="post">
	          		<ul>
	          			<li>
	          				<label for="img" style="color: white;">Foto : </label><br>
	          				<input type="text" name="img" required><br><br>
	          			</li>
	          			<li>
	          				<label for="nama" style="color: white;">Judul Buku : </label><br>
	          				<input type="text" name="nama" required><br><br>
	          			</li>
	          			<li>
	          				<label for="penulis" style="color: white;">Penulis : </label><br>
	          				<input type="text" name="penulis" id="penulis" required><br><br>
	          			</li>
	          			<li>
	          				<label for="halaman" style="color: white;">Halaman : </label><br>
	          				<input type="text" name="halaman" id="halaman" required><br><br>
	          			</li>
	          			<li>
	          				<label for="penerbit" style="color: white;">Penerbit : </label><br>
	          				<input type="text" name="penerbit" id="penerbit" required><br><br>
	          			</li>
	          			<br>
	          			<button type="submit" name="tambah">Tambah Data</button>
	          			<button type="submit">
	          				<a href="admin.php" style="text-decoration: none; color: black; ">Kembali</a>
	          			</button>
	          		</ul>
	          	</form>
	          </div>
	        <div class="card-action">
	        </div>
	      </div>
	    </div>
	   </div>
	</div>
</body>
</html>