<?php 

    require "function.php";

    // Logika dalam tombol submit
    if ( isset($_POST["submit"]) ) {

        // cek apakah data berhasil diunbah atau tidak
        if ( ubah($_POST) > 0) {
            echo "<script>
            
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            
            </script>";
        } else {
            echo "<script>
            
                alert('data gagal diubah!');
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
    <title>Ubah Data</title>
</head>

<body>

    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">

        <input type="hidden" name="id">

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="">

        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim">

        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan">

        <button type="submit" name="submit">Ubah Data</button>
    </form>
    <br>
    <a href="index.php">Ke halaman utama</a>
</body>
</html>