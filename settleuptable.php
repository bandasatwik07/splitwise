<?php
if(!isset($_SESSION)){
	session_start();
	}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];
date_default_timezone_set("Asia/Kolkata");
if($_POST['submit']=='     Pay     '){
$why=$_POST['why'];
$amount=$_POST['amount'];
$phone=$_POST['phone'];
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
			$user__name=$row[0];
	   $query="INSERT into settle_up values ('$user__name','$why','$amount','$phone','$time')";
       $result2=mysqli_query($link,$query);
       if($result2==True){
       	$count=1;
       }
       else{
       	include("settleup.php");
       	echo "<center> Error ! Please enter valid details.. <center>";
       	exit();
       }
	}
	else{
		include("settleup.php");
		echo "<center> User does not exist on Splitwise !!!<center>";
		exit();
	}
}
if($count==1){
	header('location:home.php');
}
else{
	include("settleup.php");
	echo "<center> Please enter valid details!!!<center>";
	exit();
}
}
else{
	include("settleup.php");
	exit();
}
}
else{
  header('location:home.html'); 
  echo "session over";
exit(); 
}
?>
