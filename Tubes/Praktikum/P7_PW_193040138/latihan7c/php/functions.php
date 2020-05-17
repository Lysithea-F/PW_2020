<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040138") or die("Database salah!");

  return $conn;
}

function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data) {
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $penulis = htmlspecialchars($data['penulis']);
  $halaman = htmlspecialchars($data['halaman']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $img = htmlspecialchars($data['img']);

  $query = "INSERT INTO bukubuku
                    VALUES
                    ('', '$img', '$nama', '$penulis', '$halaman', '$penerbit')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn); 
}

function hapus($no) {
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM bukubuku WHERE no = $no");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  $no = htmlspesialchars($data['no']);
  $img = htmlspesialchars($data['img']);
  $nama = htmlspesialchars($data['nama']);
  $penulis = htmlspesialchars($data['penulis']);
  $halaman = htmlspesialchars($data['halaman']);
  $penerbit = htmlspesialchars($data['penerbit']);

  $query = "UPDATE bukubuku2
  SET 
  img = '$img',
  nama = '$nama',
  penulis = '$penulis',
  halaman = '$halaman',
  penerbit = '$penerbit'
  ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}