<?php 
require 'functions.php';

if (isset($_POST["register"])) {

	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('Registrasi Berhasil');
				document.location.href = 'login.php';
			</script>";
	} else {
		echo "<script>
				alert('Registrasi Gagal');
			</script>";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>

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
		       				<li><a href="login.php">Login</a></li>
		       				<li><a href="badges.html">Registrasi</a></li>
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
	          <span class="card-title center"><H4><b>Registrasi</b></H4></span>
				<form action="" method="">
					<table>
						<tr>
							<td><label for="username">Username</label></td>
							<td>:</td>
							<td><input type="text" name="username"></td>
						</tr>
						<tr>
							<td><label for="password">Password</label></td>
							<td>:</td>
							<td><input type="password" name="password"></td>
						</tr>
					</table>
					<button type="submit" name="register">REGISTRASI</button>
				</form>
			</div>
	      </div>
	    </div>
	   </div>
	</div>

</body>
</html>