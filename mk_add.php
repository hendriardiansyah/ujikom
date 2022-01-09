<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH MATAKULIAH</title>
</head>
<body>
    <h2>Tambah Matakuliah</h2><br>
    <form method="post" action="aksi_add_mk.php">
    <table>
    <tr>
        <td><label for="kd_dosen" >kode matakuliah</label></td>
        <td>:</td>
        <td><input type="text" name="kd_mk" placeholder="masukkan kode mata kuliah" required></td>
    </tr>
    <tr>
        <td><label for="nm_mk" >nama matakuliah</label></td>
        <td>:</td>
        <td><input type="text" name="nm_mk" placeholder="masukkan nama matakuliah" required></td>
    </tr>
    <tr>
        <td><label for="jk" >Jumlah SKS</label></td>
        <td>:</td>
        <td> <input type="text" name="sks" placeholder="Masukkan jumlah sks" required> </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="SIMPAN"> <input type="button" value="BATAL" onclick="window.location.href='mk_list.php'"></td>
    </tr>
    </table>
    </form>
</body>
</html>