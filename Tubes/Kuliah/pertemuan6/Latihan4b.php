<!DOCTYPE html>
<html>
<head>
	<title>Latihan4b</title>
</head>
<body>
	<?php 
		$hadrware = array("Motherboard", "Processor", "Hard Disk","PC Coller", "VGA Card","SSD");

	
		
	
	 ?><ol>
	 	<?php for ($i=0; $i <= count($hadrware)-1 ; $i++) {?> 
	 	<li><?php echo $hadrware[$i]; ?></li>
	 <?php	} ?>
	 </ol>
	 <hr>

	 <?php 
	 	array_push($hadrware, "Modem", "Card Reader")
	  ?>
	  <ol>
	 	<?php for ($i=0; $i <= count($hadrware)-1 ; $i++) {?> 
	 	<li><?php echo $hadrware[$i]; ?></li>
	 <?php	} ?>
	 </ol>

</body>
</html>