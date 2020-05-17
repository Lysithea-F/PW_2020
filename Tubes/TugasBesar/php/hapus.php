<?php 
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: Login.php");
		exit;
	}
	
	require 'functions.php';

	$no = $_GET['id'];

	if (hapus($no) > 0) {
		echo "<script>
				alert('Data Berhasil dihapus!');
				documen.location.href = 'admin.php';
				</script>";
	} else {
		echo "<script>
				alert('Data Gagal dihapus!');
				document.location.href = 'admin.php';
				</script>";
	}
 ?>