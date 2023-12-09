<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
echo"
<html>
  
<head>
  <meta charset='utf-8'>
  <title>table</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
  integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
  <style>
  * {
    margin: 0;
    padding: 0;
  }

  body {
    background-image: url('bg_1.jpg');
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
  .content h4{
    font-size:xx-large;
  }
  footer{
    margin-top:410px;
   
  }
  #no_request{
    margin-top:200px;
    color:white;
  }
  #back{
    margin-top:100px;
  }
/* Google fonts - Open Sans */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);


</style>
</head>
  
<body>
<header>

<nav>

  <div id='head1'>
    <h1>SplitWise</h1>
  </div>
  <div class='sign'>
    <div id='logout'>
      <!-- Button trigger modal -->
      <button type='button'  class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal'><a href='log_out.php' style='text-decoration:none;color:black;font-weight:bolder;' >Log out </a> </button>
    </div>
    <div id='contact_us'>

      <!-- Button trigger modal -->
      <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
        <a href='home.php' style='text-decoration:none; '>
        <div style='color:black ; font-weight: 500; '>
         Home
          
        </div>
        </a>
      </button>

    </div>
    <div id='account'>
      <!-- Button trigger modal -->
      <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
        <a href='account_infoo.php' style='text-decoration:none; '>
        <div style='color:black ; font-weight: 500; '>
         Account
          
        </div>
        </a>
      </button>

     
      
    </div>
  </div>



</nav>
</header>





</body>
  
</html>";





}
else{
  header('location:index.html'); 
exit(); 
}
?>