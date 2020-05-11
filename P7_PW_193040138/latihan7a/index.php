<?php
require 'php/functions.php';

$bukubuku = query("SELECT * FROM bukubuku")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Daftar Buku</title>
</head>

<body>
  <a href="php/login.php">
    <button type="">Masuk ke Halaman Admin</button>
  </a>
  <div class="container">
    <?php foreach ($bukubuku as $b) : ?>
      <p class="nama">
        <a href="php/detail.php?id=<?= $b['id'] ?>">
          <?= $b["nama"] ?>
        </a>
      </p>
    <?php endforeach; ?>
  </div>

</body>

</html>