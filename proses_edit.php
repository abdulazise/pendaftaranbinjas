<?php

if (isset($_POST['edit'])) {
    include ("koneksi.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

      $query = "UPDATE peserta SET nama = '$nama', email = '$email', jenis_kelamin = '$jenis_kelamin', email = '$email',alamat = '$alamat'  WHERE id = '$id'";
      $result = mysqli_query($conn, $query);

      if(!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
      }
    }
header("location:daftar_siswa.php");
?>