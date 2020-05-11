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

function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah digunakan');
          </script>";
          return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}