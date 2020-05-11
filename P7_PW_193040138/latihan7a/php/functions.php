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
  
function ubah(data)
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