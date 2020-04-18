<?php
if (!isset($_GET['id'])) {
  header("location: ..index.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$buku = query("SELECT * FROM buku WHERE id = $id")[0];
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
    <div class="gambar">
      <img src="../assets/img<?= $b["img"]; ?>" alt="">
    </div>
    <div class="keterangan">
      <p><?= $b["nama_buku"]; ?></p>
      <p><?= $b["penulis"]; ?></p>
      <p><?= $b["halaman"]; ?></p>
      <p><?= $b["penerbit"]; ?></p>
    </div>
    <button class="tombol-kembali"><a href="../index.php"></a></button>
  </div>
</body>

</html>