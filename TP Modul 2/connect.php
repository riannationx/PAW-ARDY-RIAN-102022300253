<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
$host = "localhost"; // Server database
$user = "root"; // Username MySQL (default: root)
$pass = ""; // Password MySQL (default: kosong)
$dbname = "ead_library"; // Nama database
$port = 8080;

// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 
$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>

