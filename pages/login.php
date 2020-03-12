<?php
	include 'config.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$query = mysqli_query($conn,"select * from login where username='".$username."' and password='".$password."'");
	
	$cek = mysqli_num_rows($query);
	if($cek == 1){
		session_start();
		$_SESSION["username"] = $username;
		header('Location: home.php');
	}else{
		header('Location: index.php?log=1');
	}
?>
