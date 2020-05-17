<?php
require 'php/functions.php';

$bukubuku = query("SELECT * FROM bukubuku")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <table cellpadding="10" cellspacing="0" border="1">
      <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Nama Buku</th>
        <th>Penulis</th>
        <th>Halaman</th>
        <th>Penerbit</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($bukubuku as $buku) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="assets/img/<?= $buku["img"]; ?>" width="250" height="270"></td>
          <td><?= $buku["nama"] ?></td>
          <td><?= $buku["penulis"] ?></td>
          <td><?= $buku["halaman"] ?></td>
          <td><?= $buku["penerbit"] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    </table>
  </div>

</body>

</html>