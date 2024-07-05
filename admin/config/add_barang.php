<?php
$koneksi = new mysqli('localhost', 'root', '', 'barang');

if (isset($_POST['submit'])) {
    $nama_barang = $_POST['nama_barang'];
    $id_klasifikasi = $_POST['id_klasifikasi'];

    $koneksi->query("INSERT into barang (nama_barang,id_klasifikasi) values ('$nama_barang','$id_klasifikasi')");

    echo "<script>alert('Data berhasi disimpan');</script>";
    echo "<script>location='../barang.php'</script>";
}
