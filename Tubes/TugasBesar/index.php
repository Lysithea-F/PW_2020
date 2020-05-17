<?php
require 'php/functions.php';

$bukubuku = query("SELECT * FROM bukubuku")
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		.isi {

			text-align: center;
		}
	</style>

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>

	<!-- Navbar -->
	<div id="home" class="navbar-fixed">
		<nav class="light-blue darken-2">
			<div class="container">
		   		<div class="nav-wrapper">
		     		<a href="../index.php" class="brand-logo"><b>Tugas Besar</b></a>
		     			<ul id="nav-mobile" class="right hide-on-med-and-down">
		       				<li><a href="php/login.php">Login</a></li>
		       				<li><a href="php/registrasi.php">Registrasi</a></li>
		     			</ul>
		   		</div>
		    </div>
		</nav>
	</div>

	 <!-- Sidenav -->
	 <ul class="sidenav" id="mobile-nav">
	 	<li><a href="">Login</a></li>
	 	<li><a href="">Registrasi</a></li>
	 </ul>

	 <!-- Isi -->
	<div class="container">
	  <div class="row">
	      <div class="card deep-purple">
	        <div class="card-content white-text">
	          <span class="card-title center"><H4><b>Daftar Buku</b></H4></span>
	          <table cellpadding="0" cellspacing="1" border="">
	          	<tr>
	          		<td>
	          			<div class="isi">
    						<?php foreach ($bukubuku as $buku) : ?>
		    					<img src="assets/img/<?= $buku["img"]; ?>" class="rounded-circle responsive-img" width = "250" height="250">
		      					<p class="nama">
		        					<a href="php/detail.php?id=<?= $buku['no'] ?>">
		         			 			<?= $buku["nama"] ?>
		        					</a>
		      					</p>
	    					<?php endforeach; ?>
	    				</div>
	          		</td>
	          	</tr>
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