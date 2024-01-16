<?php 

require 'function.php';

$id = $_GET["id"]; //(lanjutan dari penjelasan logika tombol hapius di index) Maka dari itu, id yang telah dikirim di url untuk menuju hapus.php harus ditangkap menggunakan variabel $_GET karena $_GET berguna untuk menagkap segala sesuatu yang ada di url

if(hapus($id) > 0) {

    echo "<script>
            
                alert('data berhasil dihapus!');
                document.location.href = 'index.php';
            
         </script>";

}else{

    echo "<script>
            
                alert('data berhasil dihapus!');
                document.location.href = 'index.php';
            
        </script>";

}

?>