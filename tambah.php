<?php

require 'functions.php';
// cek tombol apakah sudah ditekan
if( isset($_POST["submit"]) ) {

    
         // cek data berhasil atau tidak
        if( tambah ($_POST) > 0 ) {
            echo "<script>
            alert('data berhasil ditambah!');
            document.location.href = 'siswa.php';
        </script>";
        } else {
            echo "<script>
            alert('data gagal ditambah!');
            document.location.href = 'siswa.php';
        </script>";
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tambah data mahasiswa</title>
</head>
<body>
    <h1>tambah data mahasiswa</h1>


    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nrp">nrp : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <button type="submit" name="submit">Daftar</button>
        </ul>


    </form> 
</body>
</html>