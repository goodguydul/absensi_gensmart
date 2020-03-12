<?php 
include 'config.php';
$nip	= $_GET['nip'];


$jam = date('H', time());
$hariini = date('Y/m/d');

$query= mysqli_query($conn,"select status from matakuliah where nip='".$nip."' and tanggal='".$hariini."' and jam LIKE '%".$jam."%'");
$cek  = mysqli_num_rows($query);

if($cek != null){
	if($query){
		foreach ($query as $row ) {
			echo $row['status'];
		}
	}
}else{
	echo "10";//return hasil tidak ditemukan
}


mysqli_close($conn);

?>

