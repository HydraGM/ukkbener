<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "ukk";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die ("Koneksi Gagal");
}
?>