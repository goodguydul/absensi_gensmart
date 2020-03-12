<?php 
	include 'config.php';
	$nip = $_POST['nip'];
	$status = $_POST['status']; 
	$query 	= mysqli_query($conn,"UPDATE  matakuliah SET status= '".$status."' WHERE nip= '".$nip."'");
	header('Location: attendance.php?nip='.$nip.'');
?>