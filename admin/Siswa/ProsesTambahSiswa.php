<?php
include "../../koneksi.php";
if(isset($_POST['simpan_siswa'])){
    $nisn = $_POST ['nisn'];
    $nis = $_POST ['nis'];
    $nama = $_POST ['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $awaltempo = $_POST['jatuh_tempo'];
  

    $kelas = $_POST['kelas'];
    $pecah_kelas = explode(".", $kelas);
    $id_kelas = $pecah_kelas[0];
    $kelas1 = $pecah_kelas[1];
    $keahlian = $pecah_kelas[2];

    $spp = $_POST['spp'];
    $pecah_spp = explode(".", $spp);
    $id_spp = $pecah_spp[0];
    $tahun = $pecah_spp[1];
    $nominal = $pecah_spp[2];


    $bulanIndo = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    );

    //proses simpan
		if($nisn=='' || $nis=='' || $nama=='' || $no_telp=='' || $alamat==''){
			echo "<script>window.alert('Form Belum Lengkap !')</script>";
		}else{
			$simpan = mysqli_query($koneksi, "INSERT INTO siswa  (nisn,nis,nama,id_kelas,nama_kelas,kompetensi_keahlian,alamat,no_telp,id_spp,tahun_ajaran,nominal_bayar)
					VALUES('$nisn','$nis','$nama','$id_kelas','$kelas1','$keahlian','$alamat','$no_telp','$id_spp','$tahun','$nominal')");
			if(!$simpan){
				echo "<script>window.alert('Gagal Menyimpan Data Siswa !')</script>";
			}else{
				//proses isi table bayar
				$ds=mysqli_fetch_array(mysqli_query($koneksi, "SELECT nisn FROM siswa ORDER BY id DESC LIMIT 1"));
				$nisn = $ds['nisn'];

			
				for($i=0; $i<12; $i++){
				
					$jatuhtempo = date("Y-m-d", strtotime("+$i month", strtotime($awaltempo)));

                    $bulan = $bulanIndo[date('m', strtotime($jatuhtempo))]." ".date('Y',strtotime($jatuhtempo));

					mysqli_query($koneksi, "INSERT INTO pembayaran  (nisn,jatuh_tempo,id_spp,bulan_bayar,jumlah_bayar,status)
								VALUES ('$nisn','$jatuhtempo','$id_spp','$bulan','$nominal','Belum Bayar')");
				}
                echo "<script>window.alert('Berhasil Simpan Data Siswa')</script>";
                echo "<meta http-equiv='refresh' content='0; url=../Beranda.php?hal=DataSiswa'>";
                
			}
		}
}
?>
