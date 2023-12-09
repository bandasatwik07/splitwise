<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <title>
        Build a Survey Form using HTML and CSS
    </title>
 
    <style>
        body {
            background-image: url("bg_1.jpg");
    height: 100%;
    background-position: center;
        }

        form {
            background-color: #fff;
            max-width: 800px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
 
        /* Styling form-control Class */
        .form-control {
            text-align: center;
            margin-bottom: 25px;
             width: 40%;
          border-radius: 50%;
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
        .avatar{
            margin-left:100px;
        }
        #content{
            font-size:30px;
            color:red;
            text-align: center;
        }
        
  #head1 {
    color: orange;
    /* display: inline-block; */
    margin-left: 30px;
    margin-bottom: 30px;
    font-size:23px;
  }
    </style>
</head>
  
<body>
<div id="head1">
        <h1>SplitWise</h1>
      </div>

    <form id="form">
        <div class="form-control">
           
       <img src='sad.jpg' alt='Avatar' class='avatar' height='500px'><br/>
        </div>
        <div id="content">
            Please Check the details you entered!!
        </div>
       <button type="button" onclick="location.href='index.html'">CANCEL
        </button>
    </form>
</body>
  
</html>