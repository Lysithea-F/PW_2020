<?php
require 'php/functions.php';

$bukubuku = query("SELECT * FROM bukubuku")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <?php foreach ($bukubuku as $buku) : ?>
      <p class="nama">
        <a href="php/detail.php?id=<?= $buku['no'] ?>">
          <?= $buku["nama"] ?>
        </a>
      </p>
    <?php endforeach; ?>
  </div>

</body>

</html>