<?php 
session_start();
include 'koneksi.php';

if (isset($_POST['commit'])) {
    $username = $_POST['username'];
    $password = MD5($_POST['password']);

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['password'] = $row['password'];
        $_SESSION['nama'] = $row['nama'];
        #echo "Login berhasil";
        header("Location: home.php");
        exit();
    } else {
        echo "Login gagal. Periksa kembali Username dan Password Anda.";
    }
}

?>
<html>
<head>
    <title>Login Admin</title>
    <link rel="shortcut icon"
    href="gambar/a.png"
    type="image/x-icon">
    <link rel="stylesheet"  href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<style>
        body {
            background-image: url(gambar/back.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            height: auto;
            margin: 0;
            padding: 0px;
            font-family: 'Josefin Sans', sans-serif;
        }
        h1 {
        color: white;
        }
        img.img {
        width: 50%;
        height: 308px;
        object-fit: cover;
        }
        e.cssCSS
*{
    margin: 0;
    padding: 0px;
    font-family: 'Josefin Sans', sans-serif;
    background-repeat: no-repeat;
    background-size: cover;
    height: auto;
  }
.tampilan{
    background: #fff;
    width: 400px;
    margin: 200px auto 0;
    border-radius: 16px;
    min-height: 156px;
    overflow: hidden;
}
.kepala{
    background: rgba(48, 233, 171, 0.979);
    padding: 10px 22px;
    height: 60px;
}
.kepala h2.judul{
    color: #fff;
    font-size: 25px;
    font-weight: normal;
    text-align: left;
    line-height: 20px;
}

.kesalahan{
 font-size:20px;
 color: #ff0000;
 padding: 10px 0 0 0;
 text-align: center;
}

.artikel{
    padding:10px 22px 0;
    color: #808080;
}
.kotak input[type="text"],
.kotak input[type="password"]{
    font-size: 15px;
    width: 100%;
    height: 40px;
    padding: 0 10px;
    background: #eeeeee;
    border:none;
    color: #808080;
}

.kotak input[type="submit"]{
    background: rgba(48, 233, 171, 0.979);
    font-size:18px;
    margin: 0 0 0 130px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
}
    </style>
<body>
    <form method="post" action="index.php">
        <div class="tampilan">
        <div class="kepala">
            <div class="logo"></div>
            <h2 class="judul">Login Admin</h2>
        </div>
        <div class="artikel">
        <div class="kesalahan">
<?php
    if(isset($_GET["login_error"])){
        echo "Username atau password salah";
    }
?>
</div>
<div class="kotak">
    <p><input type="text" name="username" value="" placeholder="Masukan Username Anda"></p>
    <p><input type="password" name="password" value="" placeholder="Masukan Password Anda"></p>
    <p class="submit"><a href="index.php"></a><input type="submit" name="commit" value="Login"></p>
</form>
</div>
</div>

 </div>
</div>
</body>

</html>
