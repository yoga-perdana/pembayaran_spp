<?php
    include "../../koneksi.php";

    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];

    $query = "UPDATE petugas SET username='$username', password='$password', nama_petugas='$nama_petugas', level='$level' WHERE id_petugas='$id_petugas'";
    $query_run = mysqli_query($koneksi, $query);

    if($query_run)
    {
        echo "<script>window.alert('Data Petugas Berhasil Diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataPetugas'>";
    }
    else
    {
        echo "<script>window.alert('Data Petugas Gagal Diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataPetugas'>";
    }
?>