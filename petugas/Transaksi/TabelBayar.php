<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pembayaran</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tabel Bayar</li>
    </ol>
</nav>

<?php
    include "../koneksi.php";

    $nisn = $_GET['nisn'];
                        
    $sql = $koneksi->query("SELECT * FROM siswa WHERE nisn='$nisn'");

    $tampil = $sql->fetch_assoc();

?>

<h6 class="card-title">Biodata Siswa</h6>
<div class="table-responsive">
    <!-- tabel biodata siswa -->
    <table class="table">
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td><?php echo $tampil['nisn']; ?></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><?php echo $tampil['nis']; ?></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><?php echo $tampil['nama']; ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo $tampil['nama_kelas']; ?></td>
        </tr>
        <tr>
            <td>Kompetensi Keahlian</td>
            <td>:</td>
            <td><?php echo $tampil['kompetensi_keahlian']; ?></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><?php echo $tampil['tahun_ajaran']; ?></td>
        </tr>
    </table>
    <br>
    <br>
    <!-- tabel pembayaran -->
    <h6 class="card-title">Tagihan SPP Siswa</h6>
    <table class="table table-bordered">
    <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Kode Pembayaran</th>
                <th>ID Petugas</th>
                <th>NIS</th>
                <!-- <th>Jatuh Tempo</th> -->
                <th>Tanggal Bayar</th>
                <th>Bulan Bayar</th>
                <th>Tahun Bayar</th>
                <th>ID SPP</th>
                <th>Jumlah Bayar</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php

include "../koneksi.php";

$no = 1;
$sql = $koneksi->query("SELECT * FROM pembayaran WHERE nisn='$nisn' ORDER BY jatuh_tempo ASC");

while ($data=$sql->fetch_assoc()){
echo "<tr>
                    <td>$no</td>
                    <td>$data[kode_pembayaran]</td>
                    <td>$data[id_petugas]</td>
                    <td>$data[nisn]</td>
                    
                    <td>$data[tgl_bayar]</td>
                    <td>$data[bulan_bayar]</td>
                    <td>$data[tahun_bayar]</td>
                    <td>$data[id_spp]</td>
                    <td>$data[jumlah_bayar]</td>
                    <td><b>$data[status]</b></td>
                    <td align='center'>";
                    if($data['kode_pembayaran']==''){
                        echo "<a class='btn btn-success' href='Beranda.php?hal=ProsesBayar&id_pembayaran=$data[id_pembayaran]'>Bayar</a>";
                    }else{
                        echo "<a class='text-hide' href='proses_batal_transaksi.php?nisn=$nisn&act=batal&id=$data[id_pembayaran]'>Batal</a> "; 
                        echo " <a class='btn btn-primary' href='Beranda.php?hal=Cetak&id_pembayaran=$data[id_pembayaran]'>Cetak</a>";
                    }
                    echo "</td>
                    </tr>";
                    $no++;
                }
                ?>
            </tr>
            <?php
            
            ?>
        </tbody>
    </table>
</div>