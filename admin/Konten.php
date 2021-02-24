<?php
if($_GET['hal'] == 'Beranda'){
    include "Beranda.php";
}elseif($_GET['hal'] == 'Home'){
    include "Home.php";
}elseif($_GET['hal'] == 'Profil'){
    include "Profil.php";
}elseif($_GET['hal'] == 'EditProfil'){
    include "EditProfil.php";
}elseif($_GET['hal'] == 'DataSiswa'){
    include "Siswa/DataSiswa.php";
}elseif($_GET['hal'] == 'DetailSiswa'){
    include "Siswa/DetailSiswa.php";
}elseif($_GET['hal'] == 'EditSiswa'){
    include "Siswa/EditSiswa.php";
}elseif($_GET['hal'] == 'DataKelas'){
    include "Kelas/DataKelas.php";
}elseif($_GET['hal'] == 'EditKelas'){
    include "Kelas/EditKelas.php";
}elseif($_GET['hal'] == 'DataPetugas'){
    include "Petugas/DataPetugas.php";
}elseif($_GET['hal'] == 'EditPetugas'){
    include "Petugas/EditPetugas.php";
}elseif($_GET['hal'] == 'DataSpp'){
    include "Spp/DataSpp.php";
}elseif($_GET['hal'] == 'EditSpp'){
    include "Spp/EditSpp.php";
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
}elseif($_GET['hal'] == 'GenerateLaporan'){
    include "Laporan/GenerateLaporan.php";
}elseif($_GET['hal'] == 'LaporanSiswa'){
    include "Laporan/LaporanPembayaran.php";
}elseif($_GET['hal'] == 'LaporanCetak'){
    include "Laporan/Cetak.php";
}
?>