<?php
include "../../koneksi.php";
    $id = $_POST ['id'];
    $nisn = $_POST ['nisn'];
    $nis = $_POST ['nis'];
    $nama = $_POST ['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $kelas = $_POST['kelas'];
    $pecah_kelas = explode(".", $kelas);
    $id_kelas = $pecah_kelas[0];
    $kelas1 = $pecah_kelas[1];
    $keahlian = $pecah_kelas[2];

    $tahun = $_POST['tahun'];
    $pecah_tahun = explode(".", $tahun);
    $id_spp = $pecah_tahun[0];
    $tahun1 = $pecah_tahun[1];

    $nominal = $_POST['nominal'];
    $pecah_tahun = explode(".", $nominal);
    $nominal1 = $pecah_tahun[0];

   

    //proses simpan
		if($nis=='' || $nis=='' || $nama=='' || $no_telp=='' || $alamat==''){
			echo "<script>window.alert('Form Belum Lengkap !')</script>";
		}else{
			$simpan = mysqli_query($koneksi, "UPDATE siswa SET id='$id',nisn='$nisn',nis='$nis',nama='$nama',id_kelas='$id_kelas',nama_kelas='$kelas1',kompetensi_keahlian='$keahlian',alamat='$alamat',no_telp='$no_telp'
            ,id_spp='$id_spp',tahun_ajaran='$tahun1',nominal_bayar='$nominal1' where id='$id'");
			if(!$simpan){
				echo "<script>window.alert('Gagal Menyimpan Data Siswa !')</script>";
			}else{
				//ambil data id siswa terakhir
				$ds=mysqli_fetch_array(mysqli_query($koneksi, "SELECT nisn FROM siswa ORDER BY id DESC LIMIT 1"));
				$nisn = $ds['nisn'];

				//menyimpan data kke tabel pembayaran

				mysqli_query($koneksi, "UPDATE pembayaran SET nisn='$nisn',id_spp='$id_spp' where nisn'$nisn'");
            }
            echo "<script>window.alert('Berhasil Simpan Data Siswa')</script>";
            echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataSiswa'>";
            
        }
    

?>
