<?php 

	$jarijari1 = 10;
	$jarijari2 = 5;


	$luas_lingkaran1 = 3.14*$jarijari1*$jarijari1;

	$luas_lingkaran2 = 3.14*$jarijari2*$jarijari2;

	function hitunglingkaran($jarijari){
		$luas = 3.14*$jarijari*$jarijari;
		return $luas;
	}


	function hitung2lingkaran($luas_lingkaran1,$luas_lingkaran2){
		$total_luas = $luas_lingkaran1+$luas_lingkaran2;
		return $total_luas;
	}

	echo "Total Luas ".hitunglingkaran($luas_lingkaran1,$luas_lingkaran2);


 ?>