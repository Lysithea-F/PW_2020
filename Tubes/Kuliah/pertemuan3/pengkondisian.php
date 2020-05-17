<?php 

	$nilai = 10;
	$hasil = ($nilai%2 == 0)? "Genap":"Ganjil";

	echo $hasil;

	if (($nilai%2) == 1) {
		echo "Ganjil";
	}elseif{
		echo "Genap";
	}

	// $nilai = 51;
	// if (($nilai%2) == 1 {
	// 	 echo "Ganjil";
	// }else{
	// 	 echo "Genap";
	// }


	// Pengkondisian IF ELSE
	// $warna_lampu = "Merah";

	// if ($warna_lampu == "Merah") {
	// 	echo "Berhenti";	
	// }elseif ($warna_lampu == "Kuning") {
	// 	echo "Bersiap";
	// }elseif ($warna_lampu === "Hijau") {
	// 	echo "Maju";
	// }else{
	// 	echo "Warna Tidak Dikenal";
	// }

	// $hari = 1;
	// if ($hari ==1) {
	// 	echo "Hari Minggu | Dari IF";
	// }elseif ($hari ==2) {
	// 	echo "";
	// }
	// switch ($hari) {
	// 	case 1:
	// 		echo "Hari Minggu | Dari IF switch";
	// 		break;

	// 	case '2':
	// 		echo "Hari Senin | Dari IF switch";
	// 		break;

	// 	default:
	// 		echo "Hari Tidak Dikenal";
	// 		break;
	// }

 ?>