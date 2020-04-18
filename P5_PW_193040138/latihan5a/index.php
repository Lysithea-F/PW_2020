<?php
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");

// memilih database
mysqli_select_db($conn, "pw_193040138") or die("Koneksi salah!");

// queri mengambil objek table di dalam database
$result = mysqli_query($conn, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
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
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="assets/img/<?= $row["img"]; ?>" width="200" height="200"></td>
          <td><?= $row["nama_buku"] ?></td>
          <td><?= $row["penulis"] ?></td>
          <td><?= $row["halaman"] ?></td>
          <td><?= $row["penerbit"] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endwhile; ?>

    </table>
  </div>
</body>

</html>