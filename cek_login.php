<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM petugas WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	$id = $data;
	$id2 = $data;
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION = $id;

		echo "<script>alert('Anda Berhasil Login Sebagai Admin, Selamat Datang $_SESSION[nama_petugas]');
			window.location='admin/index.php'</script>";
			
 
	// cek jika user login sebagai operator
	}else if($data['level']=="petugas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		$_SESSION = $id2;

		echo "<script>alert('Anda Berhasil Login Sebagai Petugas, Selamat Datang $_SESSION[nama_petugas]');
			window.location='petugas/index.php'</script>";
	
		}else{
		header("location:index.php?pesan=gagal");}	
		}else{
		header("location:index.php?pesan=gagal");
	}
	 
	?>
