<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] == true) {
    
} else {
    header('Location: index.php?log=2');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GenSmart Attendance</title>
    <link rel="shortcut icon" href="image/logo.png" />
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

         <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Attendance System - Faculty Computing Unsri</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
          
               <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                        <li>
                            <a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="overwritting.php"><i class="fa fa-table fa-fw"></i> Overwritting Attandance</a>
                        </li>
                        <li>
                            <a href="account.php"><i class="fa fa-edit fa-fw"></i> Create Account</a>
                        </li>
                        <li>
                            <a href="subject.php"><i class="fa fa-edit fa-fw"></i> Create Subject</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        

        <div id="page-wrapper">
            <div class="row">
                <div class="text-center col-lg-12">
                    <h1 class="page-header">Overwritting Attandance</h1>
                </div>
            </div>
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <div class="panel-body">
                        <?php 
                            $nip        =  $_GET['nip'];
                            include 'config.php'; 
                            date_default_timezone_set('Asia/Jakarta');
                            $jam        = date('H', time());
                            $hariini    = date('Y/m/d');

                            $query      = mysqli_query($conn,"select * from matakuliah where nip='".$nip."' and tanggal='".$hariini."' and jam LIKE '%".$jam."%'");
                            $cek        = mysqli_num_rows($query);

                            $statuss    = "";
                            $sts        = mysqli_fetch_array($query);
                            if ($sts['status'] == 1){
                                $statuss    = ' <div class="alert alert-success">
                                                    Status : <strong>HADIR</strong>
                                                </div>
                                            </p>
                                        <div class="panel-body">
                                            <button type="submit" class="btn btn-lg btn-success btn-block" disabled>
                                                Check in Attendance
                                            </button>
                                            <br>
                                            <p align="center">Kembali ke <a href="home.php">Home</a></p>
                                        </div>';
                            }else{
                                $statuss    = ' <div class="alert alert-danger">
                                                    Status : <strong>BELUM HADIR</strong>
                                                </div>
                                                </p>
                                        <div class="panel-body">
                                            <input type="hidden" value="1" name="status">
                                            <input type="hidden" value="'.$nip.'" name="nip">
                                            <button type="submit" class="btn btn-lg btn-success btn-block">
                                                Check in Attendance
                                            </button>
                                        </div>';
                            }
                            if($sts['prodi']=="Bil" || $sts['prodi']=="bil" ){
                                $lokasi    = "Bukit";
                            }else if($sts['prodi']=="Regl" || $sts['prodi']=="reg" ){
                                $lokasi    = "Inderalaya";
                            }

                            if($cek == 1){
                                    echo '
                                    <form role="form" action="setstatus.php" method="POST">
                                        <fieldset>
                                            <table class="table" style="text-transform: capitalize;">
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>&nbsp;</td>
                                                    <td>:</td>
                                                    <td>'.$sts['dosen'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>NIP</td>
                                                    <td>&nbsp;</td>
                                                    <td>:</td>
                                                    <td>'.$sts['nip'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>Mata Kuliah</td>
                                                    <td>&nbsp;</td>
                                                    <td>:</td>
                                                    <td>'.$sts['nama_matakuliah'].'</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal</td>
                                                    <td>&nbsp;</td>
                                                    <td>:</td>
                                                    <td>'.$sts['hari'].', '.date("d-m-Y", strtotime($sts['tanggal'])).'</td>
                                                </tr>
                                                <tr>
                                                    <td>Pukul</td>
                                                    <td>&nbsp;</td>
                                                    <td>:</td>
                                                    <td>'.$sts['jam'].' WIB</td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi</td>
                                                    <td>&nbsp;</td>
                                                    <td>:</td>
                                                    <td>Kampus '.$lokasi.'</td>
                                                </tr>
                                                <tr>
                                                    <td>Ruang Kelas</td>
                                                    <td>&nbsp;</td>
                                                    <td>:</td>
                                                    <td>'.$sts['ruangan'].'</td>
                                                </tr>
                                            </table>
                                        </fieldset>
                                        <p align="center">
                                            '.$statuss.'
                                    </form>';
                            }else{
                                echo "
                                <center>
                                    <div class='alert alert-danger'>Maaf, Jadwal anda tidak ditemukan !</div>
                                    <br>
                                    <p>Note : Jika terlambat input pada jam masuk, silahkan input pada jam keluar. Terima kasih </p>
                                    <br>
                                    <p>Kembali ke <a href='home.php'>Home</a></p>
                                </center>";
                            }
                        ?>
                    </div>
                </div>
                        <!-- /.panel-body -->
            </div>
                    <!-- /.panel -->
        </div>
                <!-- /.col-lg-12 -->
    </div>
            <!-- /.row -->
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
