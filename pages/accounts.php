<?php 
	include 'config.php';
	
	$nip		= $_POST['nip'];
	$nama		= $_POST['nama'];
	$jabatan	= $_POST['jabatan'];
	$ttl		= $_POST['ttl'];
	$notelp 	= $_POST['notelp'];
	$email 		= $_POST['email'];
	$password	= $_POST['password'];
	
	$query = mysqli_query($conn,"INSERT INTO akun (nip, nama, jabatan, ttl, notelp,email, password) VALUES ('$nip', '$nama', '$jabatan', '$ttl', '$notelp','$email', '$password')");
	
	if($query){
		header('Location: account.php?s=1');
	}else{
		header('Location: account.php?s=0');
	}
?>