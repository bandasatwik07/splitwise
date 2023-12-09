<?php 
if ($_POST['submit'] == 'Login'){ 
$login = $_POST['mobile_num']; 
$password = $_POST['password']; 
if($login && $password){ 
$link = mysqli_connect('localhost', 'root', '','splitwise');  
if(!$link) { 
die('Failed to connect to server: '); 
} 
$qry="SELECT * FROM user WHERE mobile_num = '$login' AND password = '$password'";  
$result=mysqli_query($link, $qry);
if($result == True){ 
$count = mysqli_num_rows($result);
} 
else{ 
include('registrationconformation_no.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
if( $count == 1){ 
session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $login; 
header('location:home.php'); 
} 
else{ 
include('registrationconformation_no.php'); 
echo '<center>Incorrect Username or Password !!!<center>'; 
exit(); 
} 
} 
else{ 
include('registrationconformation_no.php'); 
echo '<center>Username or Password missing!!</center>'; 
exit(); 
} 
} 
else{ 
header("location: index.html"); 
exit(); 
} 
?>
