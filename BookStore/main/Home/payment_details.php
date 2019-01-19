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
        
.dropdown-menu {

    font-style: red;
 

}
        


    h4 {
  margin-top: 25px;

}
.flex-container{

     display: flex;
     flex-direction: column;
      flex-wrap: wrap;

}

/*hr {
  margin-top: 40px;
  margin-bottom: 40px;
}*/
td {
  /*padding-top: 25px;
  padding-bottom: 25px;
  padding-left: 35px;*/
  border: 2px solid #ddd;
/*  margin-left: 50px;
  margin-right: 50px;*/
 height: 1300px;
 width: 1200px;
/*   display: flex;*/
/*     flex-direction: row;*/
/*      flex-wrap: wrap;*/


  }

  h4{
    text-align:center;

  }
      .row1 {
  margin-bottom: 30px;
}
.row1.row1 {
  margin-top: 10px;
  margin-bottom: 5px;
 /* margin-left: 10px;*/
}
.flex-container {
  display: flex;
}
[class*="col1-"] {
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: #111111;
  background-color: rgba(86,61,124,.15);
  border: 1px solid #ddd;
  margin-left: 20px;
  margin-right: 20px;
  border-width: 100px;
  }
/*
  .con1{
    background-color: white;
    border-style: round;
    color: black;
    height: 880px;
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
  }*/
    .con1{
  /*  background-color:rgba(255,255,255,0.75);*/
/*    background-color: black;*/
    /*background:black;*/
    background-color: rgba(0,0,0,0.70);
    border-style: round;
    color: black;
    /*font-style: black;*/
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
                  <li><a href="Home.php">Home</a></li>
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
                  <li><a href="feedback.php">Feedback</a></li>
                  <li><a href="http://localhost/BookStore/main/cover/cover.html">Logout</a></li>
                </ul>
              </nav>
            </div>
          </div>


          <div class="flex-site">
        <!-- <div class="header-flex-container">
           
            <div class="search-wrap">
                <form class="inputSearchBooks" action="/search">
                    <input type="text" placeholder="Search for books by  title / author " aria-label="Search for books by keyword / title / author " name="searchTerm" class="text-input" value="">
                    <button aria-label="Search" class="header-search-btn" type="submit"><span class="text">Search</span></button>
                </form>
            </div>
        </div> -->

<br>
<br>
 <div class="con1">  
<h3 style="color: white;">Payment options</h3>

<div class="container" style="color: black;">  
     

      <hr style="margin-left:260px;margin-right:260px;"></hr>
      <div style="border-radius:5px 5px 5px 5px; margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">Secure Online Payment</a></div></br>
      <div style="border-radius:5px 5px 5px 5px; margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">PayUmoney</a></div></br>
      <div style="color:black; border-radius:5px 5px 5px 5px; margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">PAYTM Wallet</a></div></br>
      <div style="border-radius:5px 5px 5px 5px;margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">Cash On Delivery</a>


</div></div></br>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
   
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>