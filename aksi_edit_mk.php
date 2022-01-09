<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_mk       = $_POST['kd_mk'];
$nm_mk       = $_POST['nm_mk'];
$sks      = $_POST['sks'];
 
// update data ke database
mysqli_query($koneksi,"update tbl_mk set kd_mk='$kd_mk', nm_mk='$nm_mk', sks='$sks' where kd_mk='$kd_mk'");
 
 
// mengalihkan halaman kembali ke index.php
header("location:mk_list.php");
?>