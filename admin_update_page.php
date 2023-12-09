<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
$user = $_SESSION['adminid'];
 echo "<!doctype html>
 <html lang='en'>
 
 <head>
   <meta charset='utf-8'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <title>Admin Update page</title>

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
 margin-left: 1050px;
//  margin-top:100px;

}

#logout {
 display: inline-block;

}
#contact_us {
    display: inline-block;
    margin-left: 20px;
  }

   .btn {
     text-decoration: none;
    }


   #settle_up {
    margin-top: 100px;
    margin-left: 200px;
    margin-right: 200px;
    margin-bottom:138px;
    border: 2px solid orange;
    border-radius: 20px;
    display: flex;
    gap: 10%;
    background-color: black;
    height:100%;
  }
  #content2 {
    margin-top: 20px;
    margin-left: 100px; 
  }
  #pic2 {
    background-color: black;
    border: 3px solid orange;
    margin-left: 360px;
    
  }
  footer{
    
    margin-top:150px;
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
           <a href='admin_home.html' style='text-decoration:none; '>
           <div style='color:black ; font-weight: 500; '>
            Home
           </div>
           </a>
         </button>
       </div>
     </div>

     </nav>
   </header>
 
   <div id='settle_up'>
   <div id='content2'>
     <h1 style='color:orange;'>Remove Users</h1>
     <p style='color:white;font-size:x-large;'>You can remove a user from Splitwise</p>
     <button type='button' class='btn btn-info' name='view'> <a href='remove_user.php'
       style='text-decoration:none;color:black;'>Remove</a> </button>
   </div>
   <div id='pic2'>
     <img src='data.jpg' alt='aaaaaayooooooooo!'  width='300' >
   </div>
 </div>
  
   </main>
  
 
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
  header('location:admin_home.html'); 
exit(); 
}
?>