<?php 

// Koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// membuat function query
function query($query) {
    global $conn;

    // ibaratkan $result sebagai lemari baju berupa array assoc, data didalam $result diibaratkan sebagai baju, dan $rows adalah kotak yang digunakan untuk menampung baju baju dari $result
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}



// membuat function tambah
function tambah($data) {
global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // query
    $query = "INSERT INTO mahasiswa VALUE ('', '$nama', '$nim', '$jurusan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
} 


// membuat function ubah
function ubah($data) {
global $conn;

    $nama = htmlspecialchars($_POST["nama"]);
    $nim = htmlspecialchars($_POST["nim"]);
    $jurusan = htmlspecialchars($_POST["jurusan"]);

    // query
    $query = "UPDATE INTO mahasiswa VALUE 
    (
        '', 
        '$nama', 
        '$nim', 
        '$jurusan'

    ) WHERE ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}



// membuat function hapus 
function hapus($id) {

    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
    
}

?>