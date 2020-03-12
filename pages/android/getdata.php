<?php 
include 'config.php';
$nip	= $_GET['nip'];


$jam = date('H', time());
$hariini = date('Y/m/d');

$query= mysqli_query($conn,"select * from matakuliah where nip='".$nip."' and tanggal='".$hariini."' and jam LIKE '%".$jam."%'");
$cek  = mysqli_num_rows($query);

if($cek != null){
	if($query){
		while ($sts  = mysqli_fetch_array($query)) {
			$row[] = $sts;
		}
		print(json_encode($row));
	}
}else{
	echo "Data tidak ditemukan";
}


mysqli_close($conn);


?>

