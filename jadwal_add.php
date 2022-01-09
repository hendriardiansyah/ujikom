<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH JADWAL</title>
</head>
<body>
    <h2>Tambah Jadwal</h2><br>
    <form method="post" action="aksi_add_jadwal.php">
    <table>
    <tr>
        <td><label for="nm_dosen" >Pilih Dosen</label></td>
        <td>:</td>
        <td>
            <select name="nm_dosen" id="nm_dosen">
            <?php 
            include "koneksi.php";
            $sqld = mysqli_query($koneksi, "SELECT * from tbl_dosen order by nm_dosen asc");
            while($data = mysqli_fetch_array($sqld)){
            ?>
                    <option value="<?php echo $data['nm_dosen'].'_'.$data['kd_dosen']; ?>"> <?php echo $data['nm_dosen'].'_'.$data['kd_dosen']; ?> </option>
                    <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td><label for="nm_mk" >Pilih Mata Kuliah</label></td>
        <td>:</td>
        <td>
            <select name="nm_mk" id="nm_mk">
            <?php 
            $sqld = mysqli_query($koneksi, "SELECT * from tbl_mk order by nm_mk asc");
            while($data = mysqli_fetch_array($sqld)){
            ?>
                    <option value="<?php echo $data['nm_mk'].'_'.$data['kd_mk']; ?>"> <?php echo $data['nm_mk'].'_'.$data['kd_mk']; ?> </option>
                    <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td><label for="ruang" >Ruang Kelas</label></td>
        <td>:</td>
        <td> <input type="text" name="ruang" placeholder="Masukkan Ruang Kelas" required> </td>
    </tr>
    <tr>
        <td><label for="waktu" >Waktu Kuliah</label></td>
        <td>:</td>
        <td> <input type="text" name="waktu" placeholder="Masukkan waktu kuliah" required> </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="SIMPAN"> <input type="button" value="BATAL" onclick="window.location.href='jadwal_list.php'"></td>
    </tr>
    </table>
    </form>
</body>
</html>