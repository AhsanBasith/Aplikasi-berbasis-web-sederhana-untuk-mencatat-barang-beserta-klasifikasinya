<?php
include 'templates/header.php';
include 'templates/sidebar.php';


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Klasifikasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="klasifikasi.php">Klasifikasi</a></li>
                        <li class="breadcrumb-item active">Tambah Klasifikasi</li>
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
                    <form action="config/add_klasifikasi.php" id="quickForm" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Klasifikasi</label>
                                <input type="text" name="klasifikasi" class="form-control" id="exampleInputEmail1" placeholder="Enter Klasifikasi">
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

?>