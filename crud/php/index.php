<?php 
    // Mengambil data dari halaman function.php
    require 'function.php';

    // query() adalah function yang diambil darin file function.php, dan $mahasiswa adalah variabel yang digunakan untuk membungkus function query()
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
    <?php  $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
        <tr>
            <td><?php  echo $i ?></td>
            <td><?php  echo $row["nama"] ?></td>
            <td><?php  echo $row["nim"] ?></td>
            <td><?php  echo $row["jurusan"] ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?> onclick= return confirm('yakin?')">hapus</a> 
                
                <?php // Penjelasan untuk syntax hapus dan ubah: ketika kursor diarahkan ke tombol ubah/hapus maka akan mengirimkan id dari database kedalam url, maka dari itu ( penjelasan lanjutan ada di hapus.php ) ?>
            </td>
        </tr>
    <?php  $i++; ?>
    <?php endforeach; ?>
        
    </table>
        <br><br>
    <a href="tambah.php">Tambah Data</a>
</body>
</html>