<?php
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
$kd_mk       = $_POST['kd_mk'];
$nm_mk       = $_POST['nm_mk'];
$sks         = $_POST['sks'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tbl_mk VALUES('$kd_mk','$nm_mk','$sks')");

// mengalihkan halaman kembali ke dosen.php
header("location:mk_list.php");
?>