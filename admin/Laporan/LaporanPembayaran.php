<?php 
    session_start();
    include '../../koneksi.php';

    function rupiah($angka){
        $hasil_rupiah = "Rp. " .number_format($angka,2,',','.');
        return $hasil_rupiah;
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Laporan Pembayaran</title>

    <style>
    .page-break{
         page-break-after:always;
       }
      .text-center{
         text-align:center;
       }
      .text-header {
         font-size:1.1rem;
      }
      .size2 {
         font-size:1.4rem;
      }
      .border-bottom {
         border-bottom:1px black solid;
      }
      .border {
         border: 2px block solid;
      }
      .border-top {
         border-top:1px black solid;
      }
      .float-right {
         float:right;
      }
      .mt-4 {
         margin-top:4px;
       }
      .mx-1 {
         margin:1rem 0 1rem 0;
      }
      .mr-1 {
         margin-right:1rem;
      }
      .mt-1 {
         margin-top:1rem;
      }
      ml-2 {
         margin-left:2rem;
      }
      .ml-min-5 {
         margin-left:-5px;
      }
      .text-uppercase {
         font:uppercase;
      }
      .d1 {
         font-size:2rem;
      }
      .img {
         position:absolute;
      }
      .link {
         font-style:underline;
      }
      .text-desc {
         font-size:14px;
      }
      .text-bold {
         font-style:bold;
      }
      .underline {
         text-decoration:underline;
      }
      
    body {
        font-family: arial;
    }

    .print {
        margin-top: 10px;
    }

    @media print {
        .print {
            display: none;
        }
    }

    table {
        border-collapse: collapse;
    }
    </style>
</head>

<body>
<div class="text-left">
      <img src="stmj.png" class="img" alt="stmj.png" width="120">
      <div class="text-center">
      <div style="margin-left:6rem;">
         <span class="text-header text-bold text-danger">
            SMKN 1 JENANGAN <br> PONOROGO <br>
               <span class="size2">LAPORAN PEMBAYARAN </span> <br> 
               SISWA<br>
         </span>
         <span class="text-desc">Jalan Niken Gandini 98 Telepon (092) 696969<br>FAX (8989) 696969 Website <span class="underline">smkn1jenpo.sch.id</span> - Email <span class="underline">stmjponorogo@gmail.com</span> <br> Setono,Jenangan,Ponorogo 696969 <br> </span>
      </div>    
      </div>
    <br />
    <hr />
    Tanggal <?= $_GET['tgl1']." -- ".$_GET['tgl2'];  ?>
    <br />
    <br>
    <table border="1" cellspacing="" cellpadding="4" width="100%">
        <tr>
            <th>NO</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>NAMA SISWA</th>
            <th>KELAS</th>
            <th>KODE PEMBAYARAN</th>
            <th>PEMBAYARAN BULAN</th>
            <th>JUMLAH</th>
            <th>KETERANGAN</th>
        </tr>
        <?php 
            $spp = $koneksi -> query("SELECT pembayaran.*,siswa.nama,siswa.nama_kelas,siswa.nis
                                    FROM pembayaran INNER JOIN siswa ON pembayaran.nisn=siswa.nisn
                                    WHERE tgl_bayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'
                                    ORDER BY kode_pembayaran ASC");
            $i=1;
            $total = 0;
            while($dta=mysqli_fetch_array($spp)) :
	    ?>
        <tr>
            <td align="center"><?= $i ?></td>
            <td align="center"><?= $dta['nisn'] ?></td>
            <td align="center"><?= $dta['nis'] ?></td>
            <td align=""><?= $dta['nama'] ?></td>
            <td align=""><?= $dta['nama_kelas'] ?></td>
            <td align=""><?= $dta['kode_pembayaran'] ?></td>
            <td align=""><?= $dta['bulan_bayar'] ?></td>
            <td align="right"><?= rupiah($dta['jumlah_bayar']) ?></td>
            <td align="center"><?= $dta['status'] ?></td>
        </tr>
        <?php $i++; ?>
        <?php $total += $dta['jumlah_bayar']; ?>

        <?php endwhile; ?>
        <tr>
            <td colspan="7" align="right">TOTAL</td>
            <td align="right"><b><?= rupiah($total) ?></b></td>
            <td></td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td></td>
            <td width="200px">
                <BR />
                <p>Ponorogo , <?= date('d-m-y') ?> <br />
                    Petugas,
                    <br />
                    <br />
                    <br />
                    <p>__________________________</p>
            </td>
        </tr>
    </table>


    <a href="#" onclick="window.print();"><button class="print">CETAK</button></a>
</body>

</html>