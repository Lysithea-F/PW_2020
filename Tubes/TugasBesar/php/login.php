<?php 
	session_start();
	require 'functions.php';

	if (isset($_SESSION['username'])) {
		header("Location: admin.php");
		exit;
	}

	if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
		$username = $_COOKIE['username'];
		$hash = $_COOKIE['hash'];

		$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
		$row = mysqli_fetch_assoc($result);

		if ($hash === hash('sha256', $row['id'], false)) {
			$_SESSION['username'] = $row['username'];
			header("Location: admin.php");
			exit;
		}
	}

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

		if (mysqli_num_rows($cek_user) > 0) {
			$row = mysqli_fetch_assoc($cek_user);
			if (password_verify($password, $row['password'])) {
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['hash'] = hash('sha256', $row['id'], false);

				if (isset($_POST['remember'])) {
					setcookie('username', $row['username'], time() + 60 * 60 * 24);
					$hash = hash('sha256', $row['id']);
					setcookie('hash', $hash, time() + 60 * 60 * 24);
				}

				if (hash('sha256', $row['id']) == $_SESSION['hash']) {
					header("Location: admin.php");
					die;
				}

				header ("Location: ../index.php");
			}
		}

		$error = true;
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

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
		       				<li><a href="registrasi.php">Registrasi</a></li>
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
	          <span class="card-title center"><H4><b>Login</b></H4></span>
				<form action="" method="post">
					<?php if (isset($error)) : ?>
						<p style="color: red; font-style: italic;">Username atau Password Salah!</p>
					<?php endif; ?>
					<table>
						<tr>
							<td><label for="username" style="color: white">Username</label></td>
							<td>:</td>
							<td><input type="text" name="username"></td>
						</tr>
						<tr>
							<td><label for="password" style="color: white">Password</label></td>
							<td>:</td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td>admin</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td>admin</td>
						</tr>
					</table>
					<br>
					<div class="remember">
						<p>
							<label>
								<input type="checkbox" class="filled-in" name="remember">
								<span style="color: white;">Remember me</span>
							</label>
						</p>
					</div>
					<br>
					<button type="submit" name="submit">Login</button>
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