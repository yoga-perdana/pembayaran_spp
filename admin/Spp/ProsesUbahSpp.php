<?php
    include "../../koneksi.php";

    $id_spp = $_POST['id_spp'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    $query = "UPDATE spp SET tahun='$tahun', nominal='$nominal' WHERE id_spp='$id_spp'";
    $query_run = mysqli_query($koneksi, $query);

    if($query_run)
    {
        echo "<script>window.alert('Data SPP Berhasil Diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataSpp'>";
    }
    else
    {
        echo "<script>window.alert('Data SPP Gagal Diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataSpp'>";
    }
?>