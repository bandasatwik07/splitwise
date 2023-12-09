<!-- Written by Manish Chandolu -->
<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];
$link=mysqli_connect('localhost','root','','splitwise');
if(!$link){
	die("Failed to connect to database");}
  $user_name = "Select `username` from `user` where mobile_num='$user' ";
  $result3=mysqli_query($link,$user_name);
  $row = mysqli_fetch_array($result3, MYSQLI_NUM);
  $username=$row[0];
  
}
else{
  header('location:startingpage.php'); 
exit(); 
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
  * {
    margin: 0;
    padding: 0;
  }

  body {
    background-image: url("bg_1.jpg");
    height: 100%;
    background-position: center;
    /* background-repeat: no-repeat; */
    /* background-size: cover; */
  }

  #head1 {
    color: orange;
    display: inline-block;
    margin: 20px 50px;
  }

  .sign {
    display: inline-block;
    margin-left: 850px;

  }

  #logout {
    display: inline-block;

  }

  #contact_us {
    display: inline-block;
    margin-left: 20px;
  }

  #account {
    display: inline-block;
    margin-left: 20px;
  }


  .btn {
    text-decoration: none;
  }

  #logo {
    display: inline-block;
    margin: 20px;
    margin-top: 80px;
    margin-left: 80px;
  }

  /* nav {
    border-top: 4px solid rgb(90, 91, 72);
    border-bottom: 4px solid rgb(90, 91, 72);
  } */
  .content {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: #e7dcd1;
    display: inline-block;
    margin-left: 100px;
    margin-top: 260px;
    vertical-align: top;


  }

  .content h1 {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: #e7dcd1;
    display: inline-block;
    margin-left: 200px;
    margin-top: -100px;
    vertical-align: top;

  }

  .content h4 {
    font-size: xx-large;
  }

  .functions {
    margin-top: 100px;
    display: flex;
    flex-direction: column;
    gap: 20%;
    margin-bottom: 100px;
  }

  #group_pay {
    margin-left: 200px;
    margin-right: 200px;
    border: 2px solid orange;
    border-radius: 20px;
    display: flex;
    gap: 10%;
    background-color: black;
  }

  #settle_up {
    margin-top: 100px;
    margin-left: 200px;
    margin-right: 200px;
    border: 2px solid orange;
    border-radius: 20px;
    display: flex;
    gap: 10%;
    background-color: black;
  }

  #requests {
    margin-top: 100px;
    margin-left: 200px;
    margin-right: 200px;
    border: 2px solid orange;
    border-radius: 20px;
    display: flex;
    gap: 10%;
    background-color: black;
  }

  #content1 {
    margin-top: 20px;
    margin-left: 150px;
  }

  #content2 {
    margin-top: 60px;
    margin-left: 150px;
  }

  #content3 {
    margin-top: 60px;
    margin-left: 150px;

  }

  #pic1 {
    background-color: black;
    border: 3px solid orange;

  }

  #pic2 {
    background-color: black;
    border: 3px solid orange;
    margin-left: 360px;
  }

  #pic3 {
    background-color: black;
    border: 3px solid orange;
  }

  #button1 {

    margin-top: 200px;
    /* margin-right: 250px ; */
  }

  #aside2 {
    display: flex;
    flex-direction: column;
    margin-left: 1460px;
    margin-top: -1640px;
    position: fixed;
    background-color: black;
    border: 3px solid orange;
  }
  #name{
    display:inline-block;
    /* font-size:70px; */
    font-style: italic;
  }
 
</style>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <header>

    <nav>

      <div id="head1">
        <h1>SplitWise</h1>
      </div>
      <div class="sign">
        <div id="logout">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><a
              href="log_out.php" style="text-decoration:none;color:black;font-weight:bolder;">Log out </a> </button>
        </div>
        <div id="contact_us">

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <a    href="contact_us.php" style="text-decoration:none;color:black;font-weight:bolder;">Contact us </a> 
          </button>

        </div>
        <div id="account">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            <a href="account_infoo.php" style="text-decoration:none;color:black;font-weight:bolder;"> Account</a>
           
          </button>

       
        </div>
      </div>



    </nav>
  </header>
  <main>
    <div id="logo">
      <img src="logo_updated.png" alt="Logo">
    </div>

    <div class="content">
      <h1>WELCOME 
        <div id="name">
        <?php
        echo $username;
        ?>
        </div>
         </h1>

      <br>
      <h4>We are here to help you in anyway we <br>can... so leave every group related <br>activities to us...</h4>
    </div>

    <div class="functions">
      <div id="group_pay">
        <div id="pic1">
          <img src="char2.png" alt="oops!" height="300px">
        </div>
        <div id="content1">
          <h1 style="color:orange;">Group pay</h1>
          <p style="color:white;font-size:xx-large;">Kill the rent, bills and many more <br> with your friends.</p>
          <button type="button" class="btn btn-info"> <a href="group_pay.php"
              style="text-decoration:none;color:black;">Group pay</a> </button>
        </div>

      </div>
      <div id="settle_up">
        <div id="content2">
          <h1 style="color:orange;">Settle up</h1>
          <p style="color:white;font-size:xx-large;">Settle up any privious money OR pay new.</p>
          <button type="button" class="btn btn-info"> <a href="settleup.php"
              style="text-decoration:none;color:black;">Settle up</a> </button>
        </div>
        <div id="pic2">
          <img src="char1.png" alt="aaaaaayooooooooo!" height="300px" width="163.97">
        </div>
      </div>
      <div id="requests">
        <div id="pic3">
          <img src="char3.png" alt="oops!" height="300px" width="163.97">
        </div>

        <div id="content3">
          <h1 style="color:orange;">Requests</h1>
          <p style="color:white;font-size:xx-large;">View the requests for group <br> pay here...</p>
          <button type="button" class="btn btn-info"> <a href="request.php"
              style="text-decoration:none;color:black;">Requests</a> </button>
        </div>
      </div>
    </div>
    
    <aside id="aside2">
      <a href="https://www.instagram.com" target="_blank"><img src="insta_logo.jpeg" alt="" width="50px"></a>
      <a href="https://www.facebook.com" target="_blank"><img src="facebook_logo.png" alt="" width="50px"></a>
      <a href="https://www.twiter.com" target="_blank"><img src="twitter_logo.png" alt="" width="50px"></a>
    </aside>

  </main>

</body>

<footer class="bg-dark text-center text-white">

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://www.iiitdmj.ac.in/" target="_blank">IIITDMJ</a>
  </div>
  <!-- Copyright -->
</footer>

</html>
