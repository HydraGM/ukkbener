<?php 
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM sewa WHERE id = '$id'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('Location: listsewa.php?hapus=sukses');
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
    <p>LIST SEWA</p>
    <p><a href="addsewa.php">[+]Tambah baru</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>No.Sewa</th>
            <th>No.KTP</th>
            <th>No.Polisi</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Kembali</th>
            <th>Biaya</th>
            <th>Catatan</th>
            <th>Status</th>
            <th>Tindakan</th>
        </tr>
            <?php 
            $query = mysqli_query($conn, "SELECT * FROM sewa");
            while ($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['no_sewa']; ?></td>
                    <td><?php echo $data['no_ktp']; ?></td>
                    <td><?php echo $data['no_polisi']; ?></td>
                    <td><?php echo $data['tgl_sewa']; ?></td>
                    <td><?php echo $data['tgl_kembali']; ?></td>
                    <td><?php echo $data['biaya']; ?></td>
                    <td><?php echo $data['catatan']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><a href='editsewa.php?id="<?= $data['id']?>"'>Edit</a>|<a href='listsewa.php?id=<?= $data['id']?>"'">Hapus</a></td>
                </tr>
            <?php
            }
            ?>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>