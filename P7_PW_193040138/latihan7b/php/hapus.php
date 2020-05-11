<?php 
	require 'functions.php';
	$id = $_GET['id'];

	if (hapus($id) > 0) {
		echo "<script>
					alert('Data Berhasil Dihapus');
							document.location.href = admin.php;
			</script>";
	} else {
				echo "<script 
							alert ('Data Gagal dihapus');
							document.location.href = 'admin.php;
					</script>";
			}

	function hapus($id)
	{
		$conn = koneksi();
		mysqli_query($conn, "DELETE FROM bukubuku WHERE id = $id ");

		return mysqli_affected_rows($conn);
	}
 ?>