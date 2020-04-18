<?php
require 'php/functions.php';

$buku = query("SELECT * FROM buku")
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
    <table>
      <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Nama Buku</th>
        <th>Penulis</th>
        <th>Halaman</th>
        <th>Penerbit</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($buku as $b) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="assets/img/<?= $bk["img"]; ?>"></td>
          <td><?= $b["nama_buku"] ?></td>
          <td><?= $b["penulis"] ?></td>
          <td><?= $b["halaman"] ?></td>
          <td><?= $b["penerbit"] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    </table>
  </div>

</body>

</html>