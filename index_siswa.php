<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Siswa</title>
    <!-- core:css -->
    <link rel="stylesheet" href="assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <?php
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan']=="gagal"){
                            echo "<script>alert('Anda gagal Login, Tolong Periksa Kembali NISN Anda!')</script>";
                        }else if($_GET['pesan']=="belum_login"){
                            echo "<script>alert('Silahkan login terlebih dahulu!')</script>";
                        }
                    }
                ?>

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2">STMJ<span>Payment</span></a>
                                        <h5 class="text-muted font-weight-normal mb-4">Selamat Datang Kembali! Silahkan
                                            Masukan NISN Anda Untuk Cek History Pembayaran.</h5>
                                        <form action="cek_siswa.php" class="forms-sample" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NISN</label>
                                                <input type="text" name="nisn" class="form-control"
                                                    id="exampleInputEmail1" placeholder="nisn">
                                            </div>
                        
                                            <div class="mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary mr-2 mb-2 mb-md-0">Login</button>
                                                    <a class="btn btn-primary mr-2 mb-2 mb-md-0" href="index.php">Login Admin & Petugas Disini</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="assets/vendors/core/core.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/vendors/feather-icons/feather.min.js"></script>
    <script src="assets/js/template.js"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <!-- end custom js for this page -->
</body>
<!-- Copied from https://www.nobleui.com/html/template/demo_1/pages/auth/login.html by Cyotek WebCopy 1.7.0.600, Saturday, September 21, 2019, 12:52:42 AM -->

</html>