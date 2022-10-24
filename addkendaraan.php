<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $no_polisi = $_POST['no_polisi'];
    $nama_kendaraan = $_POST['nama_kendaraan'];
    $tipe = $_POST['tipe'];
    $warna = $_POST['warna'];
    $no_rangka = $_POST['no_rangka'];
    $no_mesin = $_POST['no_mesin'];
    $bahan_bakar = $_POST['bahan_bakar'];
    $thn_kendaraan = $_POST['thn_kendaraan'];
    $foto = $_POST['foto'];
    $status = $_POST['status'];

    $query = "INSERT INTO kendaraan (no_polisi, nama_kendaraan, tipe, warna, no_rangka, no_mesin, bahan_bakar, thn_kendaraan, foto, status) VALUES ('$no_polisi', '$nama_kendaraan', '$tipe', '$warna', '$no_rangka', '$no_mesin', '$bahan_bakar', '$thn_kendaraan', '$foto', '$status')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("Location: listkendaraan.php?input=sukses");
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
                <td>No.Polisi</td>
                <td><input type="text" name="no_polisi"></td>
            </tr>
            <tr>
                <td>Nama Kendaraan</td>
                <td><input type="text" name="nama_kendaraan"></td>
            </tr>
            <tr>
                <td>Tipe</td>
                <td><input type="text" name="tipe"></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td><input type="text" name="warna"></td>
            </tr>
            <tr>
                <td>No.Rangka</td>
                <td><input type="text" name="no_rangka"></td>
            </tr>
            <tr>
                <td>No.Mesin</td>
                <td><input type="text" name="no_mesin"></td>
            </tr>
            <tr>
                <td>Bahan Bakar</td>
                <td><input type="text" name="bahan_bakar"></td>
            </tr>
            <tr>
                <td>Tahun Kendaraan</td>
                <td><input type="date" name="thn_kendaraan"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="text" name="foto"></td>
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