
 <?php
    session_start();

    include 'koneksi.php';


    if (isset($_POST['submit'])) {


        $username = mysqli_real_escape_string($koneksi, $_POST['username']);
        $password = mysqli_real_escape_string($koneksi, $_POST['password']);


        $sql = mysqli_query($koneksi, "SELECT * from admin where username='$username' && password='$password'");

        $akun = mysqli_num_rows($sql);

        if ($akun > 0) {
            // echo "found";
            $data = mysqli_fetch_assoc($sql);
            $_SESSION['id'] = $data['id'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['password'] = $data['password'];



            // $_SESSION['pelanggan'] = $data;
            echo "<script>alert('Login berhasil');</script>";
            echo "<script>location='../admin/dashboard.php';</script>";
        } else {
            // echo " notfound";

            echo "<script>alert('Login gagal, harap masukkan username atau password yang valid');</script>";
            echo "<script>location='../index.php';</script>";
        }
    }
