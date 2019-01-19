<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookstore";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     } 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <script src="js/index.js"></script> -->
    <link rel="stylesheet" href="styles/index.css">
    
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="icon" href="../../favicon.ico">

    <title>BookStore</title>

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

   
    <link href="Home.css" rel="stylesheet">
    <style type="text/css">
        

 /*    h4{
      font-style:Times New Roman;
          border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 700px;
    height: 120px; 
     } */

      .tb5 {
  border:2px solid #456879;
  border-radius:10px;
  height: 100px;
  width: 450px;
}

      .tb6 {
  border:2px solid #456879;
  border-radius:10px;
  height: 50px;
  width: 450px;
}

      

  .con1{
    background-color:rgba(255,255,255,0.75);
    border-style: round;
    color: black;
    font-style: white;
    height: 350px;
    border-radius: 25px;
    margin-top: 30px;
    border: 3px solid #73AD21;
    padding: 20px; 
  }

    </style>
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <!-- <h3 class="masthead-brand">BookStore</h3> -->
              <h3 class="masthead-brand">Hi            
                  <?php 
                if(isset($_SESSION['status']))
                {
                  echo $_SESSION['unm']; 
                }
                else
                { 
                  echo ' error';
                }?></h3>
<!-- role="button" aria-haspopup="true" aria-expanded="false"class="dropdown-toggle"> -->
              <nav>
                <ul class="nav masthead-nav">
                  <li ><a href="Home.php">Home</a></li>
                  <li class="dropdown">
                <a href="#"  data-toggle="dropdown" style="background-color: transparent;">Category <span class="caret"></span></a>
                <ul class="dropdown-menu" style="background-color: white;">
                  <li><a href="category_result.php?Category_name=Fiction">Fiction</a></li>
                  <li><a href="category_result.php?Category_name=Non Fiction">Non Fiction</a></li>
                  <li><a href="category_result.php?Category_name=Fantasy">Fantasy</a></li>
                  <li><a href="category_result.php?Category_name=Mystery">Mystery</a></li>
                  <li><a href="category_result.php?Category_name=Romance">Romance</a></li>
                  <li><a href="category_result.php?Category_name=Horror">Horror</a></li>
                  <li><a href="category_result.php?Category_name=Autobiography">Autobiography</a></li>
                  <li><a href="category_result.php?Category_name=Science and Technology">Science and Technology</a></li>
                  <li><a href="category_result.php?Category_name=Cookbooks">Cookbooks</a></li>
                  <li><a href="category_result.php?Category_name=Thriller">Thriller</a></li>
<!--                   <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li> -->
                </ul>
              </li><?php


              ?>
                 <!--  <li><a href="#">Contact</a></li> -->
                  <li><a href="resell.php">Re-Sell</a></li>
                 <!--  <li ><a href="http://localhost/BookStore/main/Store/Store.html">Store</a></li> -->
                  <li><a href="viewcart.php">Cart</a></li>
                  <li class="active"><a href="#">Feedback</a></li>
                  <!-- <li><a href="#">Return</a></li> -->
                  <li><a href="http://localhost/BookStore/main/cover/cover.html">Logout</a></li>
                </ul>
              </nav>
            </div>
          </div>



<form method="POST" action="process_feedback.php" >
  

       
          <div class="container"><div class="con1">
              
              <h3> Feedback</h3>

           <div class="group" > 
              <p><label><h4>Give us feedback of your experience and we promise to improve on it.. :)</label></h4></p>    
              <textarea type="text" class="tb5" name="feedback" height="100px" required></textarea>
              <span class="highlight"></span>
              <span class="bar"></span>
              
            </div><br><br>


            <button class="btn btn-lg btn-info"> Submit </button>

</div></div>







        </div>




</form>





    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
   
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>