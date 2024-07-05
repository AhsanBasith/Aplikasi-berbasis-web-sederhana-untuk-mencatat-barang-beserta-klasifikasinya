<?php
include 'templates/header.php';
include 'templates/sidebar.php';


include '../config/koneksi.php';
$barang = array();
$sql = $koneksi->query('SELECT barang.id_barang, barang.nama_barang, klasifikasi.klasifikasi
        FROM barang
        JOIN klasifikasi ON barang.id_klasifikasi = klasifikasi.id_klasifikasi');
while ($pecah = $sql->fetch_assoc()) {
    $barang[] = $pecah;
}


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Barang</li>
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
                    <a href="add_barang.php" class="btn btn-primary">Tambah Data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Barang</th>
                                <th>Klasifikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($barang as $key => $value) {

                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nama_barang']; ?></td>
                                    <td><?= $value['klasifikasi']; ?></td>

                                    <td>
                                        <a class="btn btn-success mb-1" href="edit_barang.php?id_barang=<?= $value['id_barang']; ?>">Edit</a>
                                        <a class="btn btn-danger mb-1" href="config/delete_barang.php?id_barang=<?= $value['id_barang']; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Barang</th>
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