<?php 
	// array associative
	$mahasiswa = array(
		"nama" => "Fadd",
		"nrp" => "193040000",
		"Alamat" => "Bandung",
		"Usia" => "19 tahun");
	echo $mahasiswa["nama"];
	echo "<hr>";

	// array biasa
	$mahasiswa = array("Fadd", "193040000", "Bandung", "19 tahun");
	echo $mahasiswa[0];
 ?>