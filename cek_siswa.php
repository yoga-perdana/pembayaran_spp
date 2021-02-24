<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nisn = $_POST['nisn'];

 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from siswa where nisn='$nisn'");

// $cek = mysqli_num_rows($data);
 
if(mysqli_num_rows($data) > 0){
		$row = mysqli_fetch_assoc($data);
		$_SESSION['nisn_siswa'] = $row['nisn'];
		$_SESSION['nis_siswa'] = $row{'nis'};
		$_SESSION['nama_siswa'] = $row{'nama'};
		$_SESSION['nama_kelas_siswa'] = $row{'nama_kelas'};
		$_SESSION['kompetensi_keahlian_siswa'] = $row{'kompetensi_keahlian'};
		$_SESSION['alamat_siswa'] = $row{'alamat'};
		$_SESSION['no_telp_siswa'] = $row{'no_telp'};
		$_SESSION['tahun_ajaran_siswa'] = $row{'tahun_ajaran'};
		$_SESSION['nominal_bayar_siswa'] = $row{'nominal_bayar'};
		
		echo "<script>alert('Anda Berhasil Login, Selamat Datang $_SESSION[nama_siswa]');
			window.location='siswa/index.php'</script>";
	}else{
		header("location:index_siswa.php?pesan=gagal");
	}

 
?>