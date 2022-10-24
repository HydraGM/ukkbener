<?php 
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM kendaraan WHERE id='$id'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('Location: listkendaraan.php?hapus=sukses');
    } else {
        echo "<script>alert('Data Gagal Dihapus')</script>";
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
    <p>LIST KENDARAAN</p>
    <p><a href="addkendaraan.php">[+]Tambah baru</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>No.Polisi</th>
            <th>Nama Kendaraan</th>
            <th>Tipe</th>
            <th>Warna</th>
            <th>No.Rangka</th>
            <th>No.Mesin</th>
            <th>Bahan Bakar</th>
            <th>Tahun</th>
            <th>Status</th>
            <th>Tindakan</th>
        </tr>
            <?php 
            $query = mysqli_query($conn, "SELECT * FROM kendaraan");
            while ($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['no_polisi']; ?></td>
                    <td><?php echo $data['nama_kendaraan']; ?></td>
                    <td><?php echo $data['tipe']; ?></td>
                    <td><?php echo $data['warna']; ?></td>
                    <td><?php echo $data['no_rangka']; ?></td>
                    <td><?php echo $data['no_mesin']; ?></td>
                    <td><?php echo $data['bahan_bakar']; ?></td>
                    <td><?php echo $data['thn_kendaraan']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><a href='editkendaraan.php?id="<?= $data['id']?>"'>Edit</a>|<a href='listkendaraan.php?id="<?= $data['id']?>"'">Hapus</a></td>
                </tr>
            <?php
            }
            ?>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>