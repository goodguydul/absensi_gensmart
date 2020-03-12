<?php 
	include 'config.php';
	
	$kode			= $_POST['kode'];
	$nama_matakuliah= $_POST['nama_matakuliah'];
	$sks			= $_POST['sks'];
	$hari			= $_POST['hari'];
	$date 			= str_replace('/', '-', $_POST['tanggal']);
	$tanggal 		= date( 'Y-m-d', strtotime($date) );
	$jam	 		= $_POST['jam'];
	$prodi	 		= $_POST['prodi'];
	$ruangan		= $_POST['ruangan'];
	$dosen			= $_POST['dosen'];
	$nip			= $_POST['nip'];
	
	$query = mysqli_query($conn,"INSERT INTO matakuliah (kode,nama_matakuliah, sks, hari, tanggal, jam, prodi, ruangan, dosen,nip) VALUES ('$kode','$nama_matakuliah','$sks', '$hari', '$tanggal', '$jam','$prodi','$ruangan', '$dosen','$nip')");
	
	if($query){
		header('Location: subject.php?s=1');
	}else{
		header('Location: subject.php?s=0');
	}
?>