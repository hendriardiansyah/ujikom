<?php
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$kd_mk = $_GET['kd_mk'];
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM tbl_mk WHERE kd_mk=$kd_mk");
 
// mengalihkan halaman kembali ke index.php
header("location:mk_list.php");
 
?>