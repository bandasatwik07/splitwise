<?php
if(!isset($_SESSION)){
    session_start();
    }
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];

}?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact us</title>
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
  .form {
      width: 340px;
      height: 500px;
      background: #e6e6e6;
      border-radius: 8px;
      box-shadow: 0 0 40px -10px #000;
      margin: calc(50vh - 220px) auto;
      padding: 20px 30px;
      max-width: calc(100vw - 40px);
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
      position: relative
    }

    form h2 {
      margin: 10px 0;
      padding-bottom: 10px;
      width: 180px;
      color: #78788c;
      border-bottom: 3px solid #78788c
    }

    input {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      background: none;
      outline: none;
      resize: none;
      border: 0;
      font-family: 'Montserrat', sans-serif;
      transition: all .3s;
      border-bottom: 2px solid #bebed2
    }

    input:focus {
      border-bottom: 2px solid #78788c
    }

    p:before {
      content: attr(type);
      display: block;
      margin: 28px 0 0;
      font-size: 14px;
      color: #5a5a5a
    }

    main button {
      float: right;
      padding: 8px 12px;
      margin: 8px 0 0;
      font-family: 'Montserrat', sans-serif;
      border: 2px solid #78788c;
      background: 0;
      color: #ffffff;
      cursor: pointer;
      transition: all .3s;
      /* margin-top: 50px; */
      margin:auto;
      
    }

   main button:hover {
      background: #78788c;
      color: #fff
    }

     #mail{
      content: 'Hi';
      position: absolute;
      bottom: -45px;
      right: -20px;
      background: #50505a;
      color: #fff;
      width: 320px;
      padding: 16px 4px 16px 0;
      border-radius: 6px;
      font-size: 13px;
      box-shadow: 10px 10px 40px -14px #000;
      /* margin-top: 100px; */
    }

    span {
      margin: 0 5px 0 15px ;
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

        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <a href="home.php" style="text-decoration:none; ">
            <div style="color:black ; font-weight: 500; ">
             Home
              
            </div>
            </a>
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
    
  <form class="form" method="post" action="contact_us_next.php">
    <h2>CONTACT US</h2>
    <p type="Name:"><input placeholder="Write your name here.." name="name"></input></p>
    <p type="Email:"><input placeholder="Let us know how to contact you back.." name="email"></input></p>
    <p type="Phone Number:"><input placeholder="Write your Phone number here.." name="phone"></input></p>
    <p type="Message:"><input placeholder="What would you like to tell us.." name="message"></input></p>
    <button type="submit" name="submit" value="submit">Send Message</button>
    <!-- <div id="mail">
      <span class="fa fa-envelope-o"></span> 20bcs095@iiitdmj.ac.in
    </div> -->
  </form>
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