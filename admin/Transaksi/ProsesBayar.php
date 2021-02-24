<?php

    include "../koneksi.php";

	$id_pembayaran = $_GET['id_pembayaran'];
	
	//bikin nomor transaksi otomatis
    $today = date("Ymd");
    $query = "SELECT MAX(RIGHT(kode_pembayaran,12)) AS akhir FROM pembayaran WHERE RIGHT(kode_pembayaran,12) LIKE '$today%'";
    $hasil = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($hasil);
    $noAkhirBayar = $data['akhir'];
    $noAkhirUrut = substr($noAkhirBayar, 8,4);
    $noUrutSelanjutnya = $noAkhirUrut +1;
    $noPinjamSelanjutnya = $today . sprintf('%04s', $noUrutSelanjutnya);
    $kode = "B";
	$no_baru = $kode.$noPinjamSelanjutnya;
	
	// tanggal sekarangzz
	$tglBayar 	= date('Y-m-d');
	$thnBayar 	= date('Y');

	$petugas = $_SESSION['id_petugas'];


    $sql = $koneksi->query("UPDATE pembayaran SET kode_pembayaran='$no_baru',tgl_bayar='$tglBayar',tahun_bayar='$thnBayar', id_petugas='$petugas', status='Lunas' WHERE id_pembayaran='$id_pembayaran'");


    ?>

    <script type="text/javascript">
        alert("Pembayaran Berhasil");
        window.location.href = "Beranda.php?hal=DataPembayaran";
    </script>

    <?php



?>


