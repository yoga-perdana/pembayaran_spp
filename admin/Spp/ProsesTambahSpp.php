<?php
include "../../koneksi.php";
if(isset($_POST['simpan_spp'])){
    $id_spp = $_POST['id_spp'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    $query = "INSERT INTO spp (id_spp,tahun,nominal) VALUES ('$id_spp','$tahun','$nominal')";
    $query_run = mysqli_query($koneksi, $query);

    if($query_run)
    {
        echo "<script>window.alert('SPP Berhasil Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataSpp'>";
    }
    else
    {
        echo "<script>window.alert('SPPx Gagal Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataSpp'>";
    }
}
?>