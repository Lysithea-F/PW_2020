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

function ubah($data) {

  $conn = koneksi();
  $no = htmlspecialchars($data['no']);
  $img = htmlspecialchars($data['img']);
  $nama = htmlspecialchars($data['nama']);
  $penulis = htmlspecialchars($data['penulis']);
  $halaman = htmlspecialchars($data['halaman']);
  $penerbit = htmlspecialchars($data['penerbit']);

  $query = "UPDATE bukubuku 
            SET
            img = '$img',
            nama = '$nama',
            penulis = '$penulis',
            halaman = '$halaman',
            penerbit = '$penerbit',
            WHERE id = '$no'
            ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function registrasi($data) {
  $conn = koneksi();
  $username = strtolower(stripcslshes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
          alert('username sudah digunakan');
          </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query_tambah = "INSERT INTO user VALUES ('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}

?>