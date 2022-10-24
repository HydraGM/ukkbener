<?php 
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM pelanggan WHERE id='$id'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('Location: listpelanggan.php?hapus=sukses');
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
    <p><a href="addpelanggan.php">[+]Tambah baru</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>No.KTP</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Tindakan</th>
        </tr>
            <?php 
            $query = mysqli_query($conn, "SELECT * FROM pelanggan");
            while ($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['no_ktp']; ?></td>
                    <td><?php echo $data['nama_pelanggan']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['telepon']; ?></td>
                    <td><a href='editpelanggan.php?id="<?= $data['id']?>"'>Edit</a>|<a href='listpelanggan.php?id=<?= $data['id']?>"'">Hapus</a></td>
                </tr>
            <?php
            }
            ?>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>