<?php
include "../../koneksi.php";
if(isset($_POST['simpan_petugas'])){
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];

    $query = "INSERT INTO petugas (id_petugas,username,password,nama_petugas,level) VALUES ('$id_petugas','$username','$password','$nama_petugas','$level')";
    $query_run = mysqli_query($koneksi, $query);

    if($query_run)
    {
        echo "<script>window.alert('Petugas Berhasil Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataPetugas'>";
    }
    else
    {
        echo "<script>window.alert('Petugas Gagal Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataPetugas'>";
    }
}
?>