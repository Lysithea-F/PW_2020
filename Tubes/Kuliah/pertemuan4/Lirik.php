<?php 
	$lirik = "Pasir ini erat ku genggam <br>
			Tak bersisa sebutir di telapak tangan <br>
			Jika ia tak sanggup lagi menghakimi <br>
			Mungkin hanya waktu yang mampu mengadili ia <br>
			<br>

			Andai jarum dapat kuhalang <br>
			Tak akan terbuang detik akan kudulang <br>
			Dan akan kutuang dalam ruang tak bertulang <br>
			Namun kini ku letih memilih 'tuk pulang <br>
 			<br>

			Ku pulang pun tak kunjung hilang <br>
			Menjadi bayang menghadang, lalu menyerang <br>
			Sekonyong datang lalu hilang, lalu datang, hilang <br>
			Selalu datang-hilang, lalu datang, lalu hilang <br>
			<br>

			Pasir <br>
			Ku lelah mengukir <br>
			Ku terusir tersingkir <br>
			Pasir <br>
			Tak terukur <br>
			Kau gugur teratur <br>
			Ku terkubur tersungkur <br>
			<br>

			Pasir <br>
			Ku lelah mengukir <br>
			Ku terusir tersingkir <br>
			Pasir <br>
			Tak terukur <br>
			Kau gugur teratur";

	$lirik = str_replace("a", "o", $lirik);
	$lirik = str_replace("i", "o", $lirik);
	$lirik = str_replace("u", "o", $lirik);
	$lirik = str_replace("e", "o", $lirik);

	echo "Tigapagi - Pasir <br>
	<br>";
	echo "$lirik";
 ?>