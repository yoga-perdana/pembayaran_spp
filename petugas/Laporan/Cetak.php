<!DOCTYPE html>
<html>
<head>
	<title>Cetak Pembayaran</title>
</head>
<body onload="window.print()">
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
				<td>Tanggal Pembayarn</td>
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
</html>