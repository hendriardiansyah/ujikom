<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$kd_dosen = $_GET['kd_dosen'];
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM tbl_dosen WHERE kd_dosen=$kd_dosen");
 
// mengalihkan halaman kembali ke index.php
header("location:dosen_list.php");
?>