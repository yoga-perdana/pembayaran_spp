<?php
include "../koneksi.php";

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE petugas SET nama_petugas='$nama',username='$username',password='$password' WHERE username='$username'";
    $query_run = mysqli_query($koneksi, $query);

    if($query_run)
    {
        echo "<script>window.alert('Berhasil Merubah Profil, Silahkan Logout Terlebih Dahulu')</script>";
        echo "<meta http-equiv='refresh' content='0; url=Beranda.php?hal=Home'>";
    }
    else
    {
        echo "<script>window.alert('Berhasil Merubah Profil')</script>";
        echo "<meta http-equiv='refresh' content='0; url=Beranda.php?hal=Profil'>";
    }
?>