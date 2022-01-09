<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MATAKULIAH</title>
</head>
<body>
    <h2>DATA MATAKULIAH</h2>
    <hr>
    <table>
        <tr>
            <td> <a href="mk_add.php"> <button> + Tambah Data Matakuliah</button> </a> </td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <th>no</th>
            <th>kode matakuliah</th>
            <th>nama matakuliah</th>
            <th>sks</th>
            <th>aksi</th>
        </tr>

        <?php
        include "koneksi.php"; 
        $no = 1;
        $sql = mysqli_query($koneksi, "select * from tbl_mk");
        while($data = mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['kd_mk']; ?></td>
                <td><?php echo $data['nm_mk']; ?></td>
                <td><?php echo $data['sks']; ?></td>
                <td>
                    <a href="mk_edit.php?kd_mk=<?php echo $data['kd_mk'];?> ">Edit</a>
                    <a href="mk_delete.php?kd_mk=<?php echo $data['kd_mk'];?> ">Hapus</a>
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