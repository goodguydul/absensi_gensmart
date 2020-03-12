<?php
$servername = "localhost";
$username 	= "admin_gensmart";
$password 	= "gensmartdb!";
$database	= "admin_gensmart";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database)or die('Unable to Connect');

date_default_timezone_set('Asia/Jakarta');
?> 