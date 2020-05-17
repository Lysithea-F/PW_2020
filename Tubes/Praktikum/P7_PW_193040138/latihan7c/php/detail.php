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
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
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
    <?php foreach ($bukubuku as $buku) : ?>
      <tr>
        <td><?= $i = 1; ?></td>
        <td>
          <a href="ubah.php"><button>Ubah</button></a>
          <a href="hapus.php"><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $buku["img"]; ?>"></td>
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