<?php
    include "../../koneksi.php";
    $id_petugas = $_GET['id_petugas'];
    $hapus = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas = '$id_petugas'");

    echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataPetugas'>";
?>