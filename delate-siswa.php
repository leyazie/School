<?php
// koneksi database
include 'koneksi.php';
// menangkap data nisn yang dikirim dari url
$nisn = $_GET['nisn'];

//menghapus data dari database
mysqli_query($koneksi, "delete from daftar_nilai where nisn = $nisn ");

// mengalihkan halaman kembali ke belajareca,php
header("location:belajareca.php");

?>