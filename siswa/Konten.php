<?php
if($_GET['hal'] == 'Beranda'){
    include "Beranda.php";
}elseif($_GET['hal'] == 'Home'){
    include "Home.php";
}elseif($_GET['hal'] == 'Profil'){
    include "Profil.php";
}elseif($_GET['hal'] == 'EditProfil'){
    include "EditProfil.php";
}elseif($_GET['hal'] == 'DataPembayaran'){
    include "Transaksi/DataPembayaran.php";
}elseif($_GET['hal'] == 'ProsesBayarPerbulan'){
    include "Transaksi/ProsesBayarPerbulan.php";
}elseif($_GET['hal'] == 'HistoriPembayaranSpp'){
    include "Transaksi/HistoriPembayaranSpp.php";
}elseif($_GET['hal'] == 'TabelBayar'){
    include "Transaksi/TabelBayar.php";
}elseif($_GET['hal'] == 'ProsesBayar'){
    include "Transaksi/ProsesBayar.php";
}elseif($_GET['hal'] == 'Cetak'){
    include "Laporan/Cetak.php";
}
?>