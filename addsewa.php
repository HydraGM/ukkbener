<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $tanggal = $_POST['tanggal'];
    $no_sewa = $_POST['no_sewa'];
    $no_ktp = $_POST['no_ktp'];
    $no_polisi = $_POST['no_polisi'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $biaya = $_POST['biaya'];
    $catatan = $_POST['catatan'];
    $status = $_POST['status'];

    $query = "INSERT INTO sewa (tanggal, no_sewa, no_ktp, no_polisi, tgl_sewa, tgl_kembali, biaya, catatan, status) VALUES ('$tanggal', '$no_sewa', '$no_ktp', '$no_polisi', '$tgl_sewa', '$tgl_kembali', '$biaya', '$catatan', '$status')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("Location: listsewa.php?input=sukses");
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
    <p>FORM KENDARAAN</p>
    <form action="" method="post">
        <table>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>No.Sewa</td>
                <td><input type="text" name="no_sewa"></td>
            </tr>
            <tr>
                <td>No.KTP</td>
                <td><input type="text" name="no_ktp"></td>
            </tr>
            <tr>
                <td>No.Polisi</td>
                <td><input type="text" name="no_polisi"></td>
            </tr>
            <tr>
                <td>Tanggal Sewa</td>
                <td><input type="date" name="tgl_sewa"></td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td><input type="date" name="tgl_kembali"></td>
            </tr>
            <tr>
                <td>Biaya</td>
                <td><input type="text" name="biaya"></td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td><textarea name="catatan" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status"></td>
            </tr>
        </table>
        <button type="submit" name="submit">SIMPAN</button>
    </form>
</body>
</html>