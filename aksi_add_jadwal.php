<?php
// koneksi database
include "koneksi.php";
 
$tabel1 = "tbl_dosen";
$tabel2 = "tbl_mk";

$sql_dosen = "SELECT nm_dosen, kd_dosen FROM $tabel1 order by nm_dosen asc";
$res_dosen = mysqli_query($koneksi, $sql_dosen);

$sql_mk = "SELECT kd_mk, nm_mk FROM $tabel2 order by nm_mk asc";
$res_mk = mysqli_query($koneksi, $sql_mk);

// menangkap data yang di kirim dari form
$nm_dosen    = $_POST['nm_dosen'];
$nm_mk       = $_POST['nm_mk'];
$ruang       = $_POST['ruang'];
$waktu       = $_POST['waktu'];

$kd_d = explode('_', $nm_dosen);
$nm_dosen = $kd_d[0];
$kd_dosen = $kd_d[1];

$kd_m = explode('_', $nm_mk);
$nm_mk = $kd_m[0];
$kd_mk = $kd_m[1];

// print_r ($_POST);
// die();
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tbl_jadwal VALUES('', '$kd_dosen','$kd_mk','$ruang', '$waktu')");

// mengalihkan halaman kembali ke dosen.php
header("location:jadwal_list.php");
?>