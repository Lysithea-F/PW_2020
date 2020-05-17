<?php 
	$tulisan = "Balonku ada lima <br>
				Rupa-rupa warnanya <br>
				Hijau kuning kelabu <br>
				Merah muda dan biru <br>
				Meletus balon hijau DORR... <br> 
				Hatiku sangat kacau <br>
				Balonku tinggal 4 <br>
				Kupegang erat-erat.";

	$tulisan = str_replace("a", "o", $tulisan);
	$tulisan = str_replace("i", "o", $tulisan);
	$tulisan = str_replace("u", "o", $tulisan);
	$tulisan = str_replace("e", "o", $tulisan);

	echo "$tulisan";

 ?>