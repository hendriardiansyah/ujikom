<!-- <?php
    // include "koneksi.php";
    
    // $sql = "SELECT tbl_dosen.nm_dosen, tbl_mk.nm_mk, tbl_jadwal.kd_dosen, tbl_jadwal.kd_mk, tbl_jadwal.ruang, tbl_jadwal.waktu FROM tbl_dosen, tbl_mk INNER JOIN tbl_dosen ON tbl_jadwal.kd_dosen = tbl_dosen.kd_dosen INNER JOIN tbl_mk ON tbl_jadwal.kd_mk = tbl_mk.kd_mk";
    // $res = mysqli_query($koneksi, $sql);

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA JADWAL KULIAH</title>
</head>
<body>
    <h2>DATA JADWAL KULIAH</h2>
    <hr>
    <table>
        <tr>
            <td> <a href="jadwal_add.php"> <button> + Tambah Data Jadwal</button> </a> </td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <th>no</th>
            <th>kode dosen</th>
            <th>nama dosen</th>
            <th>kode matakuliah</th>
            <th>nama matakuliah</th>
            <th>ruang</th>
            <th>waktu</th>
            <th>aksi</th>
        </tr>

        <?php
        include "koneksi.php"; 
        $tabel1 = "tbl_dosen";
        $tabel2 = "tbl_mk";
        $tabel3 = "tbl_jadwal";
        $no = 1;
        //$sql = mysqli_query($koneksi, "select * from tbl_jadwal");
        $sql = mysqli_query($koneksi, "SELECT $tabel1.nm_dosen, $tabel2.nm_mk, $tabel3.kd_dosen, $tabel3.kd_mk, $tabel3.ruang, $tabel3.waktu FROM $tabel1 INNER JOIN $tabel3 ON $tabel3.kd_dosen = $tabel1.kd_dosen INNER JOIN $tabel2 ON $tabel3.kd_mk = $tabel2.kd_mk");
        // $res = mysqli_query($koneksi, $sql);
        // print_r($sql);
        // die();
        while($data = mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['kd_dosen']; ?></td>
                <td><?php echo $data['nm_dosen']; ?></td>
                <td><?php echo $data['kd_mk']; ?></td>
                <td><?php echo $data['nm_mk']; ?></td>
                <td><?php echo $data['ruang']; ?></td>
                <td><?php echo $data['waktu']; ?></td>
                <td>
                    <a href="jadwal_edit.php?kd_mk=<?php echo $data['kd_mk'];?> ">Edit</a>
                    <a href="jadwal_delete.php?kd_mk=<?php echo $data['kd_mk'];?> ">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <table>
    <tr>
        <a href="admin_dashboard.php"> <button>Kembali Ke Menu Utama</button> </a>
    </tr>
    </table>
</body>
</html>