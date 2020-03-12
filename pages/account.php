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
	<link rel="shortcut icon" href="image/logo.png"/>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

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
          
               <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="text-center col-lg-12">
                    <h1 class="page-header">Create Account</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create Dosen's Account
                        </div>
                        <div class="panel-body">
                            <div class="row">
								<?php 						
									if(isset($_GET['s'])){
										$logs=$_GET['s'];
										if($logs==0){
										echo '
										<div class="col-lg-2"></div>
										<div class="col-lg-8" align="center">
											<div class="alert alert-danger alert-dismissable">
											  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											  <strong>Gagal ! </strong> Data gagal disimpan !
											</div>
										</div>
										';
										}else if($logs==1){
											echo '
										<div class="col-lg-2"></div>
										<div class="col-lg-8" align="center">
											<div class="alert alert-success alert-dismissable">
											  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											  <strong>Sukses ! </strong> Data berhasil disimpan
											</div>
										</div>';
										}else{
											
										}
									}
								?>
								<form action="accounts.php" method="POST">							
									<div class="col-lg-12">
										<div class="form-group form-inline" style="padding-bottom: 30px;">
											<div class="col-lg-4">
												<label >Username (NIP/NIPUS) </label>
											</div>	
											<div class="col-lg-7" >
												<input class="form-control" name="nip" style="width: 100%;" required>
											</div>
										</div>
										<div class="form-group form-inline" style="padding-bottom: 30px;">
											<div class="col-lg-4">
												<label >Nama </label>
											</div>	
											<div class="col-lg-7">
												<input class="form-control" name="nama" style="width: 100%;" required>
											</div>
										</div>
										<div class="form-group form-inline" style="padding-bottom: 30px;" >
											<div class="col-lg-4">
												<label >Position </label>
											</div>	
											<div class="col-lg-7">
												<input class="form-control" name="jabatan" style="width: 100%;" required>
											</div>
										</div>
										<div class="form-group form-inline" style="padding-bottom: 30px;">
											<div class="col-lg-4">
												<label >Place and date birth</label>
											</div>	
											<div class="col-lg-7">
												<input class="form-control" name="ttl" style="width: 100%;" required>
											</div>
										</div>
										<div class="form-group form-inline" style="padding-bottom: 30px;">
											<div class="col-lg-4">
												<label >No. Telephone </label>
											</div>	
											<div class="col-lg-7">
												<input class="form-control" name="notelp" style="width: 100%;" required>
											</div>
										</div>
										<div class="form-group form-inline" style="padding-bottom: 30px;">
											<div class="col-lg-4">
												<label >E-Mail </label>
											</div>	
											<div class="col-lg-7">
												<input class="form-control" name="email" style="width: 100%;" required>
											</div>
										</div>
										<div class="form-group form-inline" style="padding-bottom: 30px;">
											<div class="col-lg-4">
												<label >Password</label>
											</div>	
											<div class="col-lg-7">
												<input class="form-control" name="password" type="password" style="width: 100%;" required>
											</div>
										</div>
										<div class="col-lg-4">
											<button type="submit" class="btn btn-default">Create Account</button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                            <!-- /.row (nested) -->
                </div>
                        <!-- /.panel-body -->
            </div>
                    <!-- /.panel -->
        </div>
                <!-- /.col-lg-12 -->
    </div>
            <!-- /.row -->
</div>
        <!-- /#page-wrapper -->
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
