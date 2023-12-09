<?php
if(!isset($_SESSION)){
	session_start();
	}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];
date_default_timezone_set("Asia/Kolkata");

if($_POST['submit']=='submit'){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$time=date("Y-m-d H:i:s");
$link=mysqli_connect('localhost','root','','splitwise');
if(!$link){
	die("Failed to connect to database");}
	$query1="Select * from user where mobile_num= '$phone' ";
	$result1=mysqli_query($link,$query1);{
		if(mysqli_num_rows($result1)>=1){
			//proceed forwad here
			$user_name = "Select `username` from `user` where mobile_num='$user' ";
			$result3=mysqli_query($link,$user_name);
			$row = mysqli_fetch_array($result3, MYSQLI_NUM);
			
			$username=$row[0];
			
	   $query="INSERT into contact_us values ('$username','$name','$email','$phone','$message','$time')";
       $result2=mysqli_query($link,$query);
       if($result2==True){
       	$count=1;
       }
       else{
       	include("contact_us.php");
       	echo "<center> Error ! Please enter valid details.. <center>";
       	exit();
       }
	}
	else{
		include("contact_us.php");
		echo "<center> Enter vaild phone number !!!<center>";
		exit();
	}
}
if($count==1){
	header('location:home.php');
}
else{
	include("contact_us.php");
	echo "<center> Please enter valid details!!!<center>";
	exit();
}
}
else{
	include("contact_us.php");
	exit();
}
}
else{
  header('location:index.html'); 
  echo "session over";
exit(); 
}
?>
