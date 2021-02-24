<?php
    include "../../koneksi.php";
    $id_spp = $_GET['id_spp'];
    $hapus = mysqli_query($koneksi, "DELETE FROM spp WHERE id_spp = '$id_spp'");

    echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataSpp'>";
?>