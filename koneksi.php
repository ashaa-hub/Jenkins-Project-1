<?php
// koneksi.php - contoh koneksi mysqli sederhana
// Ganti nilai di bawah sesuai konfigurasi MySQL-mu
$host = "localhost";
$user = "root";
$password = "";
$database = "nama_database"; // ubah sesuai nama DB

// Membuat koneksi
$koneksi = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Jika berhasil, kamu bisa pakai $koneksi untuk query
// Contoh:
// $result = $koneksi->query("SELECT * FROM users");
// while ($row = $result->fetch_assoc()) { ... }

?>
