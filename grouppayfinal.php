<?php
if(!isset($_SESSION)){
session_start();}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];
$user_num="Select * from user where username= '$user' ";
date_default_timezone_set("Asia/Kolkata");
$time=date("Y-m-d H:i:s");

if($_POST['submit']==' NEXT '){
	$reason=$_POST['why'];
	$link=mysqli_connect('localhost','root','','splitwise');
    if(isset($_POST['phone1'])){
        $phone=$_POST['phone1'];
        $amount=$_POST['amt1'];
         $query1="Select * from user where mobile_num= '$phone' ";
        $result1=mysqli_query($link,$query1);
       if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO group_pay values ('$user','$amount','$reason','$phone','$time')";
        $result=mysqli_query($link,$query);
        if($result==True){
            $count=1;
        }
       else{
        include("group_pay.php");
        echo "
        <script>alert('Enter valid details...')</script>";
        exit();
    }}
    
        else{
        include("group_pay.php");
        echo "
        <script>alert('User ".$phone." does not exist on SplitWise !!!  Process terminated !!!')</script>";
        exit();

    }}
    if(isset($_POST['phone2'])){
        $phone=$_POST['phone2'];
        $amount=$_POST['amt2'];
         $query1="Select * from user where mobile_num= '$phone' ";
        $result1=mysqli_query($link,$query1);
       if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO group_pay values ('$user','$amount','$reason','$phone','$time')";
        $result3=mysqli_query($link,$query);
        if($result3==True){
            $count=1;
        }
        else{
            include("group_pay.php");
            echo "
            <script>alert('Enter valid details...')</script>";
            exit();
        }}
            else{
            include("group_pay.php");
            echo "
            <script>alert('User ".$phone." does not exist on SplitWise !!!  Process terminated !!!')</script>";
            exit();
    
        }}
    if(isset($_POST['phone3'])){
        $phone=$_POST['phone3'];
        $amount=$_POST['amt3'];
         $query1="Select * from user where mobile_num= '$phone' ";
        $result1=mysqli_query($link,$query1);
        if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO group_pay values ('$user','$amount','$reason','$phone','$time')";
        $result4=mysqli_query($link,$query);
    if($result4==True){
            $count=1;
        }
        else{
            include("group_pay.php");
            echo "
            <script>alert('Enter valid details...')</script>";
            exit();
        }}
            else{
            include("group_pay.php");
            echo "
            <script>alert('User ".$phone." does not exist on SplitWise !!!  Process terminated !!!')</script>";
            exit();
    
        }}
    if(isset($_POST['phone4'])){
        $phone=$_POST['phone4'];
        $amount=$_POST['amt4'];
         $query1="Select * from user where mobile_num= '$phone' ";
        $result1=mysqli_query($link,$query1);
        if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO group_pay values ('$user','$amount','$reason','$phone','$time')";
        $result5=mysqli_query($link,$query);
    if($result5==True){
            $count=1;
        }
        else{
            include("group_pay.php");
            echo "
            <script>alert('Enter valid details...')</script>";
            exit();
        }}
        else{
            include("group_pay.php");
            echo "
            <script>alert('User ".$phone." does not exist on SplitWise !!!  Process terminated !!!')</script>";
            exit();
    
        }}
    if(isset($_POST['phone5'])){
        $phone=$_POST['phone5'];
        $amount=$_POST['amt5'];
         $query1="Select * from user where mobile_num= '$phone' ";
       $result1=mysqli_query($link,$query1);
        if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO group_pay values ('$user','$amount','$reason','$phone','$time')";
        $result6=mysqli_query($link,$query);
    if($result6==True){
            $count=1;
        }
        else{
            include("group_pay.php");
            echo "
            <script>alert('Enter valid details...')</script>";
            exit();
        }}
            else{
            include("group_pay.php");
            echo "
            <script>alert('User ".$phone." does not exist on SplitWise !!!  Process terminated !!!')</script>";
            exit();
    
        }}
    if(isset($_POST['phone6'])){
        $phone=$_POST['phone6'];
        $amount=$_POST['amt6'];
         $query1="Select * from user where mobile_num= '$phone' ";
        $result1=mysqli_query($link,$query1);
        if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO group_pay values ('$user','$amount','$reason','$phone','$time')";
        $result7=mysqli_query($link,$query);
    if($result7==True){
            $count=1;
        }
        else{
            include("group_pay.php");
            echo "
            <script>alert('Enter valid details...')</script>";
            exit();
        }}
            else{
            include("group_pay.php");
            echo "
            <script>alert('User ".$phone." does not exist on SplitWise !!!  Process terminated !!!')</script>";
            exit();
    
        }}
    if(isset($_POST['phone7'])){
        $phone=$_POST['phone7'];
        $amount=$_POST['amt7'];
         $query1="Select * from user where mobile_num= '$phone' ";
        $result1=mysqli_query($link,$query1);
         if(mysqli_num_rows($result1)>=1){
        $query="INSERT INTO group_pay values ('$user','$amount','$reason','$phone','$time')";
        $result8=mysqli_query($link,$query);
    if($result8==True){
            $count=1;
        }
        else{
            include("group_pay.php");
            echo "
            <script>alert('Enter valid details...')</script>";
            exit();
        }}
            else{
            include("group_pay.php");
            echo "
            <script>alert('User ".$phone." does not exist on SplitWise !!!  Process terminated !!!')</script>";
            exit();
    
        }
    }
if($count==1){
    header('location:home.php');
    echo "Your request has been sent successfully";
}
else{
    include("group_pay.php");
    echo "<center> Please enter valid details!!! Process Terminated !!! Please enter valid details  again...<center>";
    exit();
}
}
else{
    include("group_pay.php");
    exit();
}
}
else{
  header('location:home.php'); 
  echo "session over";
exit(); 
}
?>