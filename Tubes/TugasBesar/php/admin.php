<?php 
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: Login.php");
		exit;
	}

	require 'functions.php';

	if (isset($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$bukubuku = query("SELECT * FROM bukubuku WHERE
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
 	<title>Admin</title>

 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
		       				<li><a href="logout.php" >Log Out</a></li>
		     			</ul>
		   		</div>
		    </div>
		</nav>
	</div>
	<form action="" method="get">
		<input type="text" name="keyword" autofocus style="background-color: white; width: 250px; ">
		<button type="submit" name="cari" class="btn btn-block deep-purple" id="cari" style=" ">Cari</button>
	</form>

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
	          <span class="card-title center"><H4><b>Halaman Admin</b></H4></span>


	          	<table border="1" cellpadding="13" cellspacing="0">
	          		<tr>
	          			<th>#</th>
	          			<th>Opsi</th>
	          			<th>Foto</th>
	          			<th>Judul</th>
	          			<th>Penulis</th>
	          			<th>Halaman</th>
	          			<th>Penerbit</th>
	          		</tr>
	          		<?php $i = 1; ?>
	          		<?php foreach ($bukubuku as $buku) : ?>
	          			<tr>
	          				<td><?= $i; ?></td>
	          				<td>
	          					
	          					<a href="ubah.php?id=<?= $buku['no'] ?>"><button>Ubah</button></a>
	          					<a href="hapus.php?id=<? $buku['no'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
	          				</td>
	          				<td><img src="../assets/img/<?= $buku['img']; ?>" class="rounded-circle responsive-img" width = "250" height="250"></td>
	          				<td><?= $buku['nama']; ?></td>
	          				<td><?= $buku['penulis']; ?></td>
	          				<td><?= $buku['halaman']; ?></td>
	          				<td><?= $buku['penerbit']; ?></td>
	          			</tr>
	          			<?php $i++; ?>
	          		<?php endforeach; ?>
	          	</table>
	          </div>
	        <div class="card-action">
	        </div>
	      </div>
	    </div>
	   </div>
	</div>





      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      const sidenav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sidenav);

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);
      
      const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });


      </script>

 </body>
 </html>