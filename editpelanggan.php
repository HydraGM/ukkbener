<?php 
include 'koneksi.php';

if ($_GET['id']) {
    $id=$_GET['id'];
    $query = "SELECT * FROM pelanggan WHERE id=$id";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($sql);
    if (mysqli_num_rows($sql) < 1) {
        echo "<script>alert('Data Tidak Ditemukan')</script>";
    }

if (isset($_POST['submit'])) {
    $no_ktp = $_POST['no_ktp'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $query = mysqli_query($conn, "UPDATE pelanggan SET no_ktp='$no_ktp', nama_pelanggan='$nama_pelanggan', alamat='$alamat', telepon='$telepon' WHERE id='$id' ");

    if ($query) {
        header('Location: listpelanggan.php');
    } else {
        echo "<script>alert('Data Gagal Diedit')</script>";
    }
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
            <td><input type="text" name="no_ktp" value="<?php echo $data['no_ktp']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="nama_pelanggan" value="<?php echo $data['nama_pelanggan']; ?>"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><input type="text" name="telepon" value="<?php echo $data['telepon']; ?>"></td>
        </tr>
    </table>
    <button type="submit" name="submit">SIMPAN</button>
</form>
</body>
</html>