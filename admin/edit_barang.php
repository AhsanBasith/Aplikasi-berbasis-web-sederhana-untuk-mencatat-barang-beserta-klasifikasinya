<?php
include 'templates/header.php';
include 'templates/sidebar.php';

$koneksi = new mysqli('localhost', 'root', '', 'barang');

$id_barang = $_GET['id_barang'];
$ambil = $koneksi->query("SELECT * from barang join klasifikasi on barang.id_klasifikasi=klasifikasi.id_klasifikasi where barang.id_barang='$id_barang'");
$edit = $ambil->fetch_assoc();

$barang = array();
$sql = $koneksi->query('SELECT barang.id_barang, barang.nama_barang, klasifikasi.klasifikasi
        FROM barang
        JOIN klasifikasi ON barang.id_klasifikasi = klasifikasi.id_klasifikasi');
while ($pecah = $sql->fetch_assoc()) {
    $barang[] = $pecah;
}

$klasifikasi = array();
$sql = $koneksi->query('SELECT * from klasifikasi');
while ($pecah = $sql->fetch_assoc()) {
    $klasifikasi[] = $pecah;
}


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="barang.php">Barang</a></li>
                        <li class="breadcrumb-item active">Edit barang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">

                <div class="card-body">
                    <form id="quickForm" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="klasifikasi">Klasifikasi</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?= $edit['nama_barang']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Klasifikasi</label>
                                <select class="form-control" name="id_klasifikasi" required>
                                    <option value="<?= $edit['id_klasifikasi']; ?>"><?= $edit['klasifikasi']; ?></option>
                                    <?php foreach ($klasifikasi as $key => $value) : ?>
                                        <option value="<?= $value['id_klasifikasi']; ?>"><?= $value['klasifikasi']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include 'templates/footer.php';


if (isset($_POST['submit'])) {
    $nama_barang = $_POST['nama_barang'];
    $id_klasifikasi = $_POST['id_klasifikasi'];

    $koneksi->query("UPDATE barang set nama_barang='$nama_barang', id_klasifikasi='$id_klasifikasi' where id_barang='$id_barang'");

    echo "<script>alert('Data berhasi diedit');</script>";
    echo "<script>location='barang.php';</script>";
}

?>