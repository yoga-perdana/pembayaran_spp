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

	<?php 
	include '../koneksi.php';
	$id_bayar 	= $_GET['id_pembayaran']; 
	$ambil = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran = '$id_bayar'");
	while($data = mysqli_fetch_array($ambil)){
		?>
		<h2 align="center">Struk Pembayaran</h2>
		<hr>

		<table class="table table-striped">
			<tr>
				<td>Kode Pembayaran</td>
				<td>:</td>
				<td>
					<b>
						<?php echo $data['kode_pembayaran']; ?>
					</b>
				</td>
			</tr>
            <tr>
				<td>Nisn</td>
				<td>:</td>
				<td>
					<b>
						<?php echo $data['nisn']; ?>
					</b>
				</td>
			</tr>
			<tr>
				<td>Tanggal Pembayaran</td>
				<td>:</td>
				<td>
					<b>
						<?php echo $data['tgl_bayar']; ?>
					</b>
				</td>
			</tr>
			<tr>
				<td>Bulan Bayar</td>
				<td>:</td>
				<td>
					<b>
						<?php echo $data['bulan_bayar']; ?>
					</b>
				</td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td>
					<b>
					Rp.	<?php echo $data['jumlah_bayar']; ?>
					</b>
				</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td>
					<b>
						<?php echo $data['status']; ?>
					</b>
				</td>
			</tr>
		</table>
	<?php } ?>
	<table align="center" style="width: 880px; border: none; margin-top: 5px; margin-bottom: 20px;">
		<tr>
			<td></td>
		</tr>
	</table>

	<table align="center" style="width: 880px; border: none; margin-top: 5px; margin-bottom: 20px;">
		<tr>
			<td align="right">Ponorogo, <?php echo date('d M Y') ?></td>
        </tr>
		<tr>
			<td align="right"></td>
		</tr>
		<tr>
			<td>
				<br>
				<br>
				<br>
			</td>
		</tr>
		<tr>
			<td align="right">Administrator</td>
		</tr>
		<tr>
			<td align="center"></td>
		</tr>
	</table>
	<table align="center" style="width: 880px; border: none; margin-top: 5px; margin-bottom: 20px;">
		<tr>
            <td align="left">Simpan Bukti Pembayaran Ini</td>
		</tr>
	</table>
</body>
<a href="#" onclick="window.print();"><button class="print">CETAK</button></a>
</html>