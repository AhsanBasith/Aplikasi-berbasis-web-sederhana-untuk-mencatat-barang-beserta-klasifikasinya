<?php
$koneksi = new mysqli('localhost', 'root', '', 'barang');

$id_barang = $_GET['id_barang'];


$koneksi->query("DELETE from barang where id_barang='$id_barang'");

echo "<script>alert('Data berhasil dihapus')</script>";
echo "<script>location='../barang.php';</script>";
