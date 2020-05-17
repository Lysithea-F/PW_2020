<?php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

$no = $_GET['id'];

$bukubuku = query("SELECT * FROM bukubuku WHERE no = $no");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <h1>Daftar Buku</h1>
  <table celpadding="10" cellspcacing="0" border="1">
    <tr class="atas">
      <td class="tengah">No</td>
      <td class="tengan">Foto</td>
      <td class="tengan">Nama Buku</td>
      <td class="tengan">Penulis</td>
      <td class="tengan">Halaman</td>
      <td class="tengan">penerbit</td>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($bukubuku as $b) : ?>
      <tr>
        <td><?= $i = 1; ?></td>
        <td><img src="../assets/img/<?= $b["img"]; ?>"></td>
        <td><?= $b["nama"] ?></td>
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