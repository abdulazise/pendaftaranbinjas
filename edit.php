<?php
 include 'koneksi.php';

 if (isset($_GET['id'])) {
    $id = ($_GET['id']);
    $query = "SELECT * FROM peserta WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die ("Query Error: ".mysqli_errno($conn).
        " - ".mysqli_errno($conn));
    }
    $data = mysqli_fetch_assoc($result);
    $id = $data["id"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $alamat = $data["alamat"];
    } else {
        header("location:daftar_siswa.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {
                text-align: center;
            }
            container{
                width: 400px;
                margin: auto;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Edit Data</h1>
        <div class="container">
            <form id="form_pendaftaran" action="proses_edit.php" method="post">

            <fieldset>
                <legend>Edit Data</legend>
                <p>
                    <label for="id">id</label>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="text" name="idDisabled" id="idDisabled" value="<?php echo $id ?>">
                </p>
                <p>
                <label for="nama">nama</label>
                    <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
                </p>
                <p>
                <label for="email">email</label>
                    <input type="text" name="email" id="email" value="<?php echo $email ?>">
                </p>
                <p>
                <label for="jenis_kelamin">jenis kelamin</label>
                    <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $jenis_kelamin ?>">
                </p>
                <p>
                <label for="alamat">alamat</label>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>">
                </p>

            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
            </form>
        </div>
    </body>
</html>