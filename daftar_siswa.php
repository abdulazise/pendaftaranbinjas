<?php 
    include 'koneksi.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Siswa</title>
    <link rel="shortcut icon"
    href="gambar/a.png"
    type="image/x-icon">
     <style> 
     body {
            background-image: url(gambar/back.jpg);
        }
        h1 {
        color: white;
        text-align: center;
        }
        img.img {
        width: 50%;
        height: 308px;
        object-fit: cover;
        }
         table{
            width: 1000px:
            margin: auto;
            background-color:white;
            text-align: center;      
        }
        h1{
        text-align: center;  
        }
        h2 {
            text-align: center;
            padding: 10px;
        }
        button {
      background-color: #4CAF50; 
      border: none; 
      color: white;
      padding: 15px 32px; 
      text-align: center; 
      text-decoration: none; 
      display: inline-block; 
      font-size: 16px; 
      margin: 4px 2px; 
      cursor: pointer; 
      border-radius: 8px; 
      transition-duration: 0.4s; 
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
<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head> 
<h1>Pendaftaran Bimbingan Jasmani</h1>
<nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="information.php">Informasi Tambahan</a></li>
            <li><a href="daftar_siswa.php">Daftar Siswa</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
<body>
    <h2>Daftar siswa yang sudah mendaftar</h2>
<center><a href="register.php"><button  class="button">Tambah Data</button></a></center>
<br/>
<table border="1">

<th>id</th>

<th>nama</th>

<th>email</th> 

<th>jenis kelamin</th>

<th>alamat</th>
</tr> 
<?php



$query= " SELECT * FROM peserta ORDER BY id ASC"; 
$result = mysqli_query($conn, $query);

if (!$result) {
    die ("Query Error: ".mysqli_errno ($conn). 
    " - ".mysqli_error($conn));
}
while ($data = mysqli_fetch_assoc($result))

{

echo "<tr>" ;
echo "<td>$data[id]</td>"; 
echo "<td>$data[nama]</td>";
echo "<td>$data[email]</td>"; 
echo "<td>$data[jenis_kelamin]</td>";
echo "<td>$data[alamat]</td>";  


echo '<td> 
<a href="edit.php?id='.$data['id'].'">Edit</a> /
<a href="hapus.php?id='.$data['id'].'" 
onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>

</td>'; 
echo "</tr>";
}
?>
</table>
</body> 
<footer>
        <p>Hak Cipta &copy; 2023 Pendaftaran Bimbingan Jasmani</p>
    </footer>
</html>
