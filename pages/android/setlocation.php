<?php 
include 'config.php';
$id				= $_GET['id'];
$nip			= $_GET['nip'];
$lokasiattend	= "";
if ($id == "1"){
	$lokasiattend="Bukit";
}else if($id == "2"){
	$lokasiattend="Inderalaya";
}else{
	$lokasiattend="Diluar Kampus";
}

$jam = date('H', time());
$hariini = date('Y/m/d');

$query= mysqli_query($conn,"update matakuliah set lokasiattend = '".$lokasiattend."' where nip='".$nip."' and tanggal='".$hariini."' and jam LIKE '%".$jam."%'");

if($query){
	echo "Data berhasil diubah";
}else{
	echo "Data gagal diubah";
}

mysqli_close($conn);
?>

