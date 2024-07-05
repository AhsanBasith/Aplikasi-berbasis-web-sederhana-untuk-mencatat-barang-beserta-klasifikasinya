<?php
include 'templates/header.php';
include 'templates/sidebar.php';


include '../config/koneksi.php';
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
                    <h1 class="m-0">Klasifikasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Klasifikasi</li>
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
                <div class="card-header">
                    <a href="add_klasifikasi.php" class="btn btn-primary">Tambah Data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Klasifikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($klasifikasi as $key => $value) {

                            ?>
                                <tr>
                                    <td style="width:50px"><?= $no++ ?></td>
                                    <td><?= $value['klasifikasi']; ?></td>
                                    <td>
                                        <a class="btn btn-success mb-1" href="edit_klasifikasi.php?id_klasifikasi=<?= $value['id_klasifikasi']; ?>">Edit</a>
                                        <a class="btn btn-danger mb-1" href="config/delete_klasifikasi.php?id_klasifikasi=<?= $value['id_klasifikasi']; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Klasifikasie</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
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

?>