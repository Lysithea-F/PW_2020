<!DOCTYPE html>
<html>
<head>
	<title>Latihan2c</title>
	<style>
		.kotak {
			width: 20px;
			height: 20px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;

		}
		.kotak1 {
			background-color: #57e65a;
			width: 20px;
			height: 20px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;
		}
		.clear {
			clear: both;

		}
		.ganjil {
			background-color: #003;
			color: #fff;
			width: 20px;
			height: 20px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;

		}
		.genap {
			background-color: #57e65a;
			text-align: center;
		}

	</style>
</head>
<body>
	<?PHP 
        $a = "#1";
        $b = "1";
        $c = "#2";
        $d = "2";
        $e = "#3";
        $f = "3";
        $g = "#4";
        $h = "4";
        $i = "#5";
        $j = "5";
	?>

	<table>
		<tr>
			<td><div class="kotak"><?=$a?></div></td>
			<td><div class="ganjil"><?=$b?></div></td>
		</tr>
		<tr>
			<td><div class="kotak"><?=$c?></div></td>
			<td><div class="genap"><?=$d?></div></td>
			<td><div class="kotak"><?=$c?></div></td>
			<td><div class="genap"><?=$d?></div></td>
		</tr>
		<tr>
			<td><div class="kotak"><?=$e?></div></td>
			<td><div class="ganjil"><?=$f?></div></td>
			<td><div class="kotak"><?=$e?></div></td>
			<td><div class="ganjil"><?=$f?></div></td>
			<td><div class="kotak"><?=$e?></div></td>
			<td><div class="ganjil"><?=$f?></div></td>
		</tr>
		<tr>
			<td><div class="kotak"><?=$g?></div></td>
			<td><div class="genap"><?=$h?></div></td>
			<td><div class="kotak"><?=$g?></div></td>
			<td><div class="genap"><?=$h?></div></td>
			<td><div class="kotak"><?=$g?></div></td>
			<td><div class="genap"><?=$h?></div></td>
			<td><div class="kotak"><?=$g?></div></td>
			<td><div class="genap"><?=$h?></div></td>
		</tr>
		<tr>
			<td><div class="kotak"><?=$i?></div></td>
			<td><div class="ganjil"><?=$j?></div></td>
			<td><div class="kotak"><?=$i?></div></td>
			<td><div class="ganjil"><?=$j?></div></td>
			<td><div class="kotak"><?=$i?></div></td>
			<td><div class="ganjil"><?=$j?></div></td>
			<td><div class="kotak"><?=$i?></div></td>
			<td><div class="ganjil"><?=$j?></div></td>
			<td><div class="kotak"><?=$i?></div></td>
			<td><div class="ganjil"><?=$j?></div></td>
		</tr>
	</table>

</body>
</html>