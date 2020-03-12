<?php 
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 //Getting values 
 $username = $_POST['email'];
 $password = $_POST['password'];
 
 //Creating sql query
 $sql = "SELECT * FROM akun WHERE nip='$username' AND password='$password'";
 
 //importing dbConnect.php script 
 require_once('config.php');
 
 //executing query
 $result = mysqli_query($conn,$sql);
 
 //fetching result
 $check = mysqli_fetch_array($result);
 
 //if we got some result 
 if(isset($check)){
 //displaying success 
 echo "success";
 }else{
 //displaying failure
 echo "failure";
 }
 mysqli_close($conn);
 }