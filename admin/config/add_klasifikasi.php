<?php
$koneksi = new mysqli('localhost', 'root', '', 'barang');

if (isset($_POST['submit'])) {
    $klasifikasi = $_POST['klasifikasi'];

    $koneksi->query("INSERT into klasifikasi (klasifikasi) values ('$klasifikasi')");

    echo "<script>alert('Data berhasi disimpan');</script>";
    echo "<script>location='../klasifikasi.php';</script>";
}
