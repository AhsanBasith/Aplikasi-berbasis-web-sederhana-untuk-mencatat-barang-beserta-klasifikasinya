<?php
$koneksi = new mysqli('localhost', 'root', '', 'barang');

$id_klasifikasi = $_GET['id_klasifikasi'];


$koneksi->query("DELETE from klasifikasi where id_klasifikasi='$id_klasifikasi'");

echo "<script>alert('Data berhasil dihapus')</script>";
echo "<script>location='../klasifikasi.php';</script>";
