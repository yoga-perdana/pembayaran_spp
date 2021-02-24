<?php
include "../../koneksi.php";
if(isset($_POST['simpan_kelas'])){
    $id_kelas = $_POST['id_kelas'];
    $kelas = $_POST['kelas'];
    $kompetensi = $_POST['kompetensi'];

    $query = "INSERT INTO kelas (id_kelas,nama_kelas,kompetensi_keahlian) VALUES ('$id_kelas','$kelas','$kompetensi')";
    $query_run = mysqli_query($koneksi, $query);

    if($query_run)
    {
        echo "<script>window.alert('Kelas Berhasil Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataKelas'>";
    }
    else
    {
        echo "<script>window.alert('Kelas Gagal Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataKelas'>";
    }
}
?>