<?php 
include 'koneksi.php';

if ($_GET['id']) {
    $id=$_GET['id'];
    $query = "SELECT * FROM sewa WHERE id=$id";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($sql);
    if (mysqli_num_rows($sql) < 1) {
        echo "<script>alert('Data Tidak Ditemukan')</script>";
    }

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

    $query = mysqli_query($conn, "UPDATE sewa SET tanggal='$tanggal', no_sewa='$no_sewa', no_ktp='$no_ktp', no_polisi='$no_polisi', tgl_sewa='$tgl_sewa', tgl_kembali='$tgl_kembali', biaya='$biaya', catatan='$catatan', status='$status' WHERE id='$id' ");

    if ($query) {
        header('Location: listsewa.php');
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
            <td>Tanggal</td>
            <td><input type="text" name="tanggal" value="<?php echo $data['tanggal']; ?>"></td>
        </tr>
        <tr>
            <td>No.Sewa</td>
            <td><input type="text" name="no_sewa" value="<?php echo $data['no_sewa']; ?>"></td>
        </tr>
        <tr>
            <td>No.KTP</td>
            <td><input type="text" name="no_ktp" value="<?php echo $data['no_ktp']; ?>"></td>
        </tr>
        <tr>
            <td>No.Polisi</td>
            <td><input type="text" name="no_polisi" value="<?php echo $data['no_polisi']; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Sewa</td>
            <td><input type="text" name="tgl_sewa" value="<?php echo $data['tgl_sewa']; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td><input type="text" name="tgl_kembali" value="<?php echo $data['tgl_kembali']; ?>"></td>
        </tr>
        <tr>
            <td>biaya</td>
            <td><input type="text" name="biaya" value="<?php echo $data['biaya']; ?>"></td>
        </tr>
        <tr>
            <td>Catatan</td>
            <td><textarea name="catatan" cols="30" rows="10" value="<?php echo $data['catatan']; ?>"></textarea></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><input type="text" name="status" value="<?php echo $data['status']; ?>"></td>
        </tr>
    </table>
    <button type="submit" name="submit">SIMPAN</button>
</form>
</body>
</html>