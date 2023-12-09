<!-- Written by Manish  Chandolu -->
<?php
$insert = 1;
$server = "localhost" ;
$username = "root" ;
$adress = "";
$con = mysqli_connect($server,$username,$adress);
if(!$con){
    die("Connection to this database is failed due to". mysqli_connect_error());
}
else{
    //echo "Success connecting to the database" ;
}
echo "<br>";
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$dob = $_POST['dob'];
$gender = $_POST['exampleRadios'];
$mobile = $_POST['mobile_num'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO `splitwise`.`user`(`first_name`, `last_name`, `dob`, `gender`, `mobile_num`, `email`, `username`, `password`) VALUES ('$firstname','$lastname','$dob','$gender','$mobile','$email','$username','$password')";
if($con->query($sql) == true){
    //echo "Successfully inseted" ;
    $insert = 2;
}
else{
    echo "ERROR:$sql <br> $con->error" ;
}
$con->close();
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SplitWise</title>
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

  #signin {
    display: inline-block;
    
  }
  
  #signup {
    display: inline-block;
    margin-left: 20px;
  }
  #admin {
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
    margin-top: 180px;
    vertical-align: top;

  }

  .cards {
    margin-left: 180px;
    margin-top: 80px;
    display: flex;
    /* justify-content: space-between; */
    align-content: center;
    flex-direction: row;
    gap: 12%;
    /* border-radius: 10px; */


  }

  .card_bg {
    background-color: black;
  }

  .card-body {
    color: white;
  }
  .alert_bg{
    background-color:black;
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
        <div id="signin">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Sign in
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Sign in</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="signin.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="mobile_num">Mobile number</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="mobile_num">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label" name="password">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div id="signup">

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Sign up
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign up</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="first_name">First name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1 " name="first_name"
                        aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="last_name">Last name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1 " name="last_name"
                        aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="dob">Date of birth</label>
                      <input type="date" class="form-control" id="exampleInputEmail1 " name="dob"
                        aria-describedby="emailHelp">
                    </div>


                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="username">Gender</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="male" value="option1"
                          checked>
                        <label class="form-check-label" for="male">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="female" value="option2">
                        <label class="form-check-label" for="female">
                          Female
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="nota" value="option3">
                        <label class="form-check-label" for="nota">
                          Prefer not to say
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="mobile_num">Mobile number:</label>
                      <input type="number"="form-control" id="exampleInputEmail1 " name="mobile_num"
                        aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="username">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1 " name="email"
                        aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="username">Username</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="username">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label" name="password">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>

              </div>
            </div>
          </div>

        </div>
        <div id="admin">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            Admin 
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Admin Sign in</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="admin.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="username">Admin ID</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="admin_id">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label" name="password">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>



    </nav>
  </header>
 
  <div class="alert alert-success alert_bg" role="alert">
    <h4>
      Congratulations!! You have Successfully registerd. Sign in to continue....
    </h4>

  </div>
  <main>
    <div id="logo">
      <img src="logo_updated.png" alt="Logo">
    </div>

    <div class="content">
      <h1>Less stress when sharing expenses <br /> with friends.</h1>
      <br>
      <h4>Keep track of your shared expenses <br>and balances with housemates, trips, <br>groups, friends, and family
        with splitwise.</h4>
    </div> -->

    <div class="cards">
      <div id="card1">
        <div class="card card_bg" style="width: 18rem;">
          <img src="card1.jpg" class="card-img-top" alt="..." height="286px">
          <div class="card-body">
            <h5 class="card-title">Add expenses easily</h5>
            <p class="card-text">Quickly add expenses on the go before you forget who paid.</p>
            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Click to
              register</a>
          </div>
        </div>
      </div>
      <div id="card2">
        <div class="card card_bg" style="width: 18rem;">
          <img src="card2.png" class="card-img-top" alt="..." height="286px">
          <div class="card-body">
            <h5 class="card-title">Pay friends back</h5>
            <p class="card-text">Settle up with a friend and record any cash or online payment.</p>
            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Click to
              register</a>
          </div>
        </div>
      </div>
      <div id="card3">
        <div class="card card_bg" style="width: 18rem; ">
          <img src="card3.webp" class="card-img-top" alt="..." height="286px">
          <div class="card-body">
            <h5 class="card-title">Organize expenses</h5>
            <p class="card-text">Split expenses with any group: trips, housemates, friends, and family.</p>
            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Click to
              register</a>
          </div>
        </div>
      </div>
    </div>
  </main>
     <!-- <div id="popmsg">

     <?php
    if($insert == 2){
        echo "Successfully inserted";
       
    }
    else{
        echo "Error";
    }
    ?>
    </div> -->

    
</body>
<footer class="bg-dark text-center text-white">
    
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="https://youtube.com/">youtube.com</a>
    </div>
    <!-- Copyright -->
  </footer>

</html>