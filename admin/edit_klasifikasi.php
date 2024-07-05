<?php
include 'templates/header.php';
include 'templates/sidebar.php';

$koneksi = new mysqli('localhost', 'root', '', 'barang');

$id_klasifikasi = $_GET['id_klasifikasi'];
$sql = $koneksi->query("SELECT * from klasifikasi where id_klasifikasi='$id_klasifikasi'");
$edit = $sql->fetch_assoc();


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Klasifikasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="klasifikasi.php">Klasifikasi</a></li>
                        <li class="breadcrumb-item active">Edit Klasifikasi</li>
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
                                <input type="text" name="klasifikasi" id="id_klasifikasi" class="form-control" value="<?= $edit['klasifikasi']; ?>">
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
    $klasifikasi = $_POST['klasifikasi'];

    $koneksi->query("UPDATE klasifikasi set klasifikasi ='$klasifikasi' where id_klasifikasi='$id_klasifikasi'");

    echo "<script>alert('Data berhasi diedit');</script>";
    echo "<script>location='klasifikasi.php';</script>";
}

?>