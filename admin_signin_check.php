<?php 
if ($_POST['submit'] == 'Login'){ 
$login = $_POST['admin_id']; 
$password = $_POST['password'];   
if($login== 'admin' && $password=='admin' ){ 
$count = 1;
} 
else{ 
include('registrationconformation_no.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
if( $count == 1){ 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['adminid'] = $login; 
header('location:admin_home.html'); 
} 
else{ 
include('registrationconformation_no.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
} 
else{ 
header("location: index.html"); 
exit(); 
} 
?>
