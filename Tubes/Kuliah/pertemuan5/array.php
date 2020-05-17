<?php 

	// array 1 dimensi
	$arah = array("Kanan,","Kiri");

	$arah[2] = "Atas";
	// echo $arah;

	$arah[] = "Bawah";

	$arah[1] = "Kanan";
	$arah[0] = "Kiri";

	
	print_r($arah);

	echo "<br>";

	echo "Panjang Array = " .count($arah);



 ?>