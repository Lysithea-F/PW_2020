<?php 
	// for ($i=0; $i <9 ; $i+=2) { 
	// 	echo "Nilai" .$i. "<br>"
	// 		;
	// }

	$i = 1;
	while ($i <= 10) {
		echo "Nilai" .$i. "<br>";
		$i++;
	}
	
	do {
		echo "Nilai " .$i. "<br>";
		$i++;
	} while ($i< 10); 
	echo "Nilai Akhir i = " .$i;
 ?>