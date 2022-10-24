<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $no_ktp = $_POST['no_ktp'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $foto = $_POST['foto'];

    $query = "INSERT INTO pelanggan (no_ktp, nama_pelanggan, alamat, telepon, foto) VALUES ('$no_ktp', '$nama_pelanggan', '$alamat', '$telepon', '$foto')";
    $sql = mysqli_query($conn, $query);

    if ($sql){
        header('Location: listpelanggan.php?input=sukses');
    } else {
        echo "<script>alert('Data Gagal Ditambahkan')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>No.KTP</td>
                <td><input type="text" name="no_ktp"></td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td><input type="text" name="nama_pelanggan"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telepon"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="text" name="foto"></td>
            </tr>
        </table>
        <button type="submit" name="submit">DAFTAR</button>
</form>
</body>
</html>