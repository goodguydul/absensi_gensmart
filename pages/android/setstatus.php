<?php 
include 'config.php';
$nip	= $_GET['nip'];
$status = $_GET['status'];

$jam = date('H', time());
$hariini = date('Y/m/d');

$query= mysqli_query($conn,"update matakuliah set status = '".$status."' where nip='".$nip."' and tanggal='".$hariini."' and jam LIKE '%".$jam."%'");

if($query){
	echo "Data berhasil diubah";
}else{
	echo "Data gagal diubah";
}

mysqli_close($conn);
?>

