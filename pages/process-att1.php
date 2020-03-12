<?php 
	include 'config.php';
	$username = $_POST['nip'];
	$password = $_POST['password'];
	 
	$query = mysqli_query($conn,"select * from akun where nip='".$username."' and password='".$password."'");
	$cek = mysqli_num_rows($query);
	echo $cek;
	if($cek == "1"){
		header('Location: attendance.php?nip='.$username.'');
	}else{
		header('Location: overwritting.php?log=0');
	}
?>