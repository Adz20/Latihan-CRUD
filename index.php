<?php
//koneksi database
require 'functions.php';
//ambil data dari tabel siswa_smk
$siswa_smk = query("SELECT * FROM siswa_smk");
//ambil data dari result
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data Mahasiswa</a>

    <table border="1" cellpadding="10" cellxpacing="0">
       <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>E-mail</th>
          <th>Jurusan</th>
          <th>aksi</th>
       </tr>
        
        <?php $i = 1; ?>
        <?php foreach($siswa_smk as $row):?>
          <tr>
             <td><p= $i; ?> <?= $row ["id"]; ?></td>
             <td><img src="<?php echo $row ["gambar"];?> "width="70"></td>
             <td><?= $row ["nis"]; ?></td>
             <td><?= $row ["nama"]; ?></td>
             <td><?= $row ["email"]; ?></td>
             <td><?= $row ["jurusan"]; ?></td>
             <td><a href="ubah.php?id=<?= $row ["id"]; ?>">ubah</a> |
                 <a href="hapus.php?id=<?= $row ["id"]; ?>" onclick="return confirm('YAKIN?')">hapus</a>
             </td>
          </tr>  
       <?php endforeach; ?>
       
    </table>
</body>
</html>