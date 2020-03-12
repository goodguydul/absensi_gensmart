<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] == true) {
    header('Location: home.php');
} else {
    
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
<h2 class="intro-text text-center">Gensmart
                        <strong>Attendance System</strong>
                    </h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                        <p style="font-size: 10px">Note: Gunakan browser Chrome</p>
                    </div>
                    <div class="panel-body">
					<?php 
						if(isset($_GET['log'])){
							$logs=$_GET['log'];
							if($logs==1){
							echo '<div class="alert alert-danger alert-dismissable">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <strong>Gagal ! </strong>Username / Password Salah !
							</div>';
							}else if($logs==2){
								echo '<div class="alert alert-danger alert-dismissable">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Maaf ! </strong>Anda belum login.
								</div>';
							}else if($logs==3){
								echo '<div class="alert alert-success alert-dismissable">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Sukses ! </strong>Anda telah logout.
								</div>';
							}else{
								
							}
						}
					?>
                        <form role="form" action="login.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                </div>
            </div>
        </div>
    </footer>
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
