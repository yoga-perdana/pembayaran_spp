<?php
    include "../../koneksi.php";

    $id_kelas = $_POST['id_kelas'];
    $nama = $_POST['nama_kelas'];
    $kompetensi_keahlian = $_POST['kompetensi_keahlian'];

    $query = "UPDATE kelas SET nama_kelas='$nama', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas='$id_kelas'";
    $query_run = mysqli_query($koneksi, $query);

    if($query_run)
    {
        echo "<script>window.alert('Data Kelas Berhasil Diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataKelas'>";
    }
    else
    {
        echo "<script>window.alert('Data Kelas Gagal Diubah')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataKelas'>";
    }
?>