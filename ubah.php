<?php

require 'functions.php';
//ambil data di URL
$id = $_GET["id"];
//query data siswa
$mhs = query("SELECT * FROM siswa_smk WHERE id = $id")[0];
//cek tombol
if (isset ($_POST["submit"])){
   

    //cekapakah data berhasil di ubah
    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah !');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal diubah !');
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
    <title>ubah Data Siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>>
        <ul>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" id="nis" name="nis" required
                value="<?= $mhs["nis"]; ?>">
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" id="nama" name="nama" required
                value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">E-mail : </label>
                <input type="text" id="email" name="email" required
                value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" id="jurusan" name="jurusan" required
                value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" id="gambar" name="gambar" required
                value="<?= $mhs["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>