<?php
include 'koneksi.php';

function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id= validateInput($_POST['id']);
    $nama = validateInput($_POST['nama']);
    $email = validateInput($_POST['email']);
    $jenis_kelamin = validateInput($_POST['jenis_kelamin']);
    $alamat = validateInput($_POST['alamat']);


    $sql = "INSERT INTO peserta ( id, nama, email, jenis_kelamin, alamat) VALUES ( '$id', '$nama', '$email', '$jenis_kelamin', '$alamat')";

    if (mysqli_query($conn, $sql)) {
        echo "Pendaftaran berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran</title>
    <link rel="shortcut icon"
    href="gambar/a.png"
    type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<style>
        body {
            background-image: url(gambar/back.jpg);
        }
        h1 {
        color: white;
        text-align: center;
        }
        h2 {
            text-align: center;
            padding: 20px;
        }
        img.img {
        width: 50%;
        height: 308px;
        object-fit: cover;
        }
        footer{
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #f5f5f5;
        text-align: center;
        padding: 10px;
        }
    </style>
<nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="information.php">Informasi Tambahan</a></li>
            <li><a href="daftar_siswa.php">Daftar Siswa</a></li>
            <li><a href="logout.php"></a>Logout</li>
        </ul>
    </nav>
<body>
<header>
        <h1>Silahkan Mendaftar Di Bimbingan Jasmani Antasena</h1>
    </header>

    <section class="box-formulir">
        

        <h2>Formulir Pendaftaran Bimbingan Jasmani</h2>
        <form action="" method="post">
            <div class="box">
                <table class="table-form">
                    
                    <tr>
                        <td>id</td>
                        <td>:</td>
                        <td>
                            <input type= "text"  name="id" class= "input-control" placeholder="isi dengan no ktp">
                        </td>
                    </tr>
                    <tr>
                        <td>nama</td>
                        <td>:</td>
                        <td>
                            <input type= "text"  name="nama" class= "input-control"  placeholder="isi nama lengkap">
                        </td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>:</td>
                        <td>
                            <input type= "text"  name="email" class= "input-control"  placeholder="isi email digunakan">
                        </td>
                    </tr>
                    <tr>
                        <td>jenis kelamin</td>
                        <td>:</td>
                        <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>alamat</td>
                        <td>:</td>
                        <td>
                            <input type= "text"  name="alamat" class= "input-control">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type= "submit" name="submit" class="btn_daftar" value="Daftar Sekarang"><a href="home.php"></a>
                        </td>
                    </tr>



        </form>
    </section>
    
   
</body>
</html>
<footer>
        <p>Hak Cipta &copy; 2023 Pendaftaran Bimbingan Jasmani</p>
    </footer>
