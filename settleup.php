<?php
if(!isset($_SESSION)){
session_start();}
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['USER_ID'];
echo "
<html>
<head>
	<title>Settle-Up</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
	
</head>
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

  .head{
    color:yellow;
   }
 
        form {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
 

        .form-control {
            text-align: left;
            margin-bottom: 25px;
        }
 

        .form-control label {
            display: block;
            margin-bottom: 10px;
        }
 
        .form-control input,
        .form-control select,
        .form-control textarea {
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            padding: 10px;
            display: block;
            width: 95%;
        }
 
        .form-control input[type='radio'],
        .form-control input[type='checkbox'] {
            display: inline-block;
            width: auto;
        }

        button {
            background-color: #4cd3cf;
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            font-size: 21px;
            display: block;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
	 

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3'
crossorigin='anonymous'></script>
<header>

<nav>

  <div id='head1'>
    <h1>SplitWise</h1>
  </div>
  <div class='sign'>
    <div id='logout'>
      <!-- Button trigger modal -->
      <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal'><a href='log_out.php' style='text-decoration:none;color:black;font-weight:bolder;' >Log out </a> </button>
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
      <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal1'>
        Account 
      </button>

      <!-- Modal -->
      <div class='modal fade' id='exampleModal1' tabindex='-1' aria-labelledby='exampleModalLabel'
        aria-hidden='true'>
        <div class='modal-dialog'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h1 class='modal-title fs-5' id='exampleModalLabel'>Admin Sign in</h1>
              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
              <form method='post' action='account.php'>
                <div class='mb-3'>
                  <label for='exampleInputEmail1' class='form-label' name='username'>Admin ID</label>
                  <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'
                    name='admin_id'>
                </div>
                <div class='mb-3'>
                  <label for='exampleInputPassword1' class='form-label' name='password'>Password</label>
                  <input type='password' class='form-control' id='exampleInputPassword1' name='password'>
                </div>
                
                <button type='submit' class='btn btn-primary'>Submit</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>



</nav>
</header>




		
<form id='form'  name='settleup' method='post' action='settleuptable.php'>
		<div class='form-control'><b>
     <label for='name'>For What reason</label><span class='required'> </span><br/>
		<input type='text' name='why' maxlength='100' placeholder='Rent/lunch/trip' required='required'/><br/>
	   </div>
	   <div class='form-control'>
		<label for='Amount'>Amount</label><span class='required'> </span><br/>
		<input type='Amount' name='amount' maxlength='12'required='required'/><br/>
	 </div>
	 <div class='form-control'>
		<label for='phone' >Phone number</label><span class='required'></span><br/>
		<input type='text' name='phone' maxlength='20' placeholder='-91+' required='required'/>
	   </div>
	   <div class='form-control'>
		<p><input type='submit' name='submit' value='     Pay     '></p><br/></a></b>
	   </div></b>
		</form>
</body>

<footer class='bg-dark text-center text-white'>
    
    <!-- Copyright -->
    <div class='text-center p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
      © 2022 Copyright:
      <a class='text-white' href='https://www.iiitdmj.ac.in/' target='_blank'>IIITDMJ</a>
    </div>
    <!-- Copyright -->
  </footer>
</html>";
}
else{
  header('location:home.php'); 
exit(); 
}
?>