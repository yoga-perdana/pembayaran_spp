<?php
    include "../../koneksi.php";
    $id_kelas = $_GET['id_kelas'];
    $hapus = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas = '$id_kelas'");

    echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataKelas'>";
?>