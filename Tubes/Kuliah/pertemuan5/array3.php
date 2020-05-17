<?php 
	$mahasiswa = array();
	$mahasiswa[0][0]="193040138";
	$mahasiswa[0][1]="Hikmat Fadrial Ramadhan";
	$mahasiswa[1][0]="Bandung";
	$mahasiswa[1][1]="082214513355";

	for ($i=0; $i < count($mahasiswa); $i++) {
		for ($j=0; $j < 2; $j++) {
			echo $mahasiswa[$i][$j];
			echo "<br>";
		}
	}

 ?>