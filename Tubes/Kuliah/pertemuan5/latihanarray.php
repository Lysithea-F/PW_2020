<?php 
	
	$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

		for($i=0; $i < count($bulan); $i++){
		echo "Bulan " .$bulan[$i]. "<br>";
	}

	echo "<hr>";

	foreach ($bulan as $namabulan) {
		echo $namabulan."<br>";
	}

	echo "<hr>";

	$angka = array(5,2,6,4,3,1);

	$hasil = array_pop($bulan);
	print_r($bulan);
	echo "<hr>";

	$hasil = array_push($angka, 10,9,8,7);
	print_r($angka);
	echo "<hr>";



 ?>