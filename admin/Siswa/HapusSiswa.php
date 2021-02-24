<?php
    include "../../koneksi.php";
    $nisn = $_GET['nisn'];
    $hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn = '$nisn'");

    echo "<script>window.alert('Sukses Hapus')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataSiswa'>";
?>