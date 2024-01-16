<?php 

    require "function.php";

    // Logika dalam tombol submit
    if ( isset($_POST["submit"]) ) {

        // cek apakah data berhasil ditambahkan atau tidak
        // logika syntax dibawah adalah = $_POST akan dikirimkan ke function.php dan akan ditangkap oleh variabel $data yang merupakan sebuah parameter dari function tambah()
        if ( tambah($_POST) > 0) {
            echo "<script>
            
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            
            </script>";
        } else {
            echo "<script>
            
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
        
                </script>";

            echo "<br>";
            echo mysqli_error($conn);
        }

    } 

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">

        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required>

        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim" required>

        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" required>

        <button type="submit" name="submit">Tambah Data</button>
    </form>
    <br>
    <a href="index.php">Ke halaman utama</a>
</body>
</html>