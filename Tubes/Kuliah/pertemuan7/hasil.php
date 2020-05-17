<?php 
	function hasil ($nilai1,$nilai2){
	echo "Ini Adalah Hasil Penjumlahan";
	echo "<br>";
	echo $nilai1 + $nilai2;
	}

	$nilai1 = $_GET['nilai1'];
	$nilai2 = $_GET['nilai2'];

	hasil ($nilai1,$nilai2);
 ?>