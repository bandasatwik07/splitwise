<?php
if(!isset($_SESSION)){
	session_start();
	}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['adminid'];
date_default_timezone_set("Asia/Kolkata");
if($_POST['submit']=='REMOVE'){
$username=$_POST['username'];
$time=date("Y-m-d H:i:s");
$link=mysqli_connect('localhost','root','','splitwise');
if(!$link){
	die("Failed to connect to database");}
$query1="Select * from user where username= '$username' ";
$result1=mysqli_query($link,$query1);{
	if(mysqli_num_rows($result1)>=1){
		//proceed forwad here
	   $query="DELETE from user where username='$username'";
       $result2=mysqli_query($link,$query);
       if($result2==True){
       	$count=1;
       }
       else{
       	include("remove_user.php");
       	echo "<center> Error ! User does not exist<center>";
       	exit();
       }
	}
	else{
		include("remove_user.php");
		echo "<center> User does not exist ... !!!<center>";
		exit();
	}
}
if($count==1){
	include("admin_home.html");
		echo "<center> USER NO MORE EXIST ON Splitwise<center>";
}
else{
	include("remove_user.php");
	echo "<center> User does not exist...<center>";
	exit();
}
}
else{
	include("remove_user.php");
	exit();
}
}
else{
  header('location:index.html'); 
  echo "session over";
exit(); 
}
?>
