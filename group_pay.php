<!-- Written by Manish Chandolu -->
<?php
if(!isset($_SESSION)){
	session_start();
}
echo "
<!doctype html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Group Pay</title>
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
  form {
    background-color: #fff;
    max-width: 500px;
    margin: 50px auto;
    padding: 30px 20px;
    box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }

        .form-control {
            text-align: left;
            // margin-bottom: 25px;
            margin:0px 100000px 0px 10px;
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
          <a href='account_infoo.php' style='text-decoration:none;color:black;font-weight:bolder;'> Account</a>
         
           </button>

          </div>
      </div>



    </nav>
  </header>


 
  </main>
  
	
<form id='form' name='grouppay' method='post' action='grouppayconf.php'>
		<div class='form-control'><b>
		<label for='Amount'>Amount</label><span class='required'> </span><br/>
		<input type='Amount' name='amount' maxlength='12'required='required'/><br/>
		</div>
		<div class='form-control'>
			<label for='people'>Number of People</label><span class='required'> </span><br/>
		<input type='radio' name='people' value='2' required='required'>2<br/>
		<input type='radio' name='people' value='3' required='required'>3<br/>
		<input type='radio' name='people' value='4' required='required' >4<br/>
		<input type='radio' name='people' value='5' required='required'>5<br/>
		<input type='radio' name='people' value='6' required='required'>6<br/>
		<input type='radio' name='people' value='7' required='required' >7<br/>
	   </div>
	   <div class='form-control'>
		<p><input type='submit' name='submit' value=' NEXT '></p><br/></a></b>
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
?>