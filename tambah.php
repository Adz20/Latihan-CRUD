<?php

require 'functions.php';
//koneksi


//cek tombol
if (isset ($_POST["submit"])){
   

    //cekapakah data berhasil di input
    if(tambah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil ditambahkan !');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal ditambahkan !');
            document.location.href = 'index.php';
            </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" id="nis" name="nis" required>
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" id="nama" name="nama" required>
            </li>
            <li>
                <label for="email">E-mail : </label>
                <input type="text" id="email" name="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" id="jurusan" name="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" id="gambar" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>