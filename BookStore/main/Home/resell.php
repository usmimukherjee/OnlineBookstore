<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">



    <link rel="stylesheet" href="styles/index.css">
    
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">





    <title>BookStore</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Home.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <style type="text/css">
      

  .con1{
    background-color: white;
    border-style: round;
    color: black;
    font-style: white;
    height: 1200px;
    border-radius: 25px;
    margin-top: 30px;
    border: 3px solid #73AD21;
    padding: 20px; 
  }

          .tb6 {
  border:2px solid #456879;
  border-radius:10px;
  height: 50px;
  width: 450px;
}

    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                  <li class="active"><a href="resell.php">Re-Sell</a></li>
                 <!--  <li ><a href="http://localhost/BookStore/main/Store/Store.html">Store</a></li> -->
                  <li><a href="viewcart.php">Cart</a></li>
                  <li><a href="feedback.php">Feedback</a></li>
                  <!-- <li><a href="#">Return</a></li> -->
                  <li><a href="http://localhost/BookStore/main/cover/cover.html">Logout</a></li>
                </ul>
              </nav>
            </div>
          </div>


          <div class="flex-site">

        <form method="POST" action="Store.php">
        <div class="container">
    <div class="row">
        <h2></h2>
           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                
                                <input type="text" name="search" class="  search-query form-control" placeholder="Search Book Name"  />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" >
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                </div>
        </div>
    </form>
<div class="container"><div class="con1">
<div id="page">
  <!-- start content -->
  <div id="content">
    <div class="post" style="margin-left:10px">
      <h2 class="title" >RE-SELL BOOK</h2>
      <div class="entry" >
        <form action='process_addbook.php' method='POST' enctype="multipart/form-data">
        
            <br><b>Book Name:</b><br>
            <input type='text' name='name'class="tb6" size='35'style="background-color: white;">
            <br><br>
            
             <b>Category:</b><br>
            <select  name="cat" class="tb6" style="background-color: white;">
                <?php
                  
                    
      
                      $query="select * from Category ";
      
                      $res=mysqli_query($conn,$query);
                      
                      while($row=mysqli_fetch_assoc($res))
                      {
                        echo "<option enable>".$row['Category_Name'];
                        
                        
                      }
                      
                ?>
            </select>
            <br><br> 
            
            <b>Description:</b><br>
            <textarea cols="40" rows="6"class="tb6" name='description' style="background-color: white;" ></textarea>
            <br><br>
            
            <b>Publisher:</b><br>
            <input type='text' name='publisher'class="tb6" size='35' style="background-color: white;" >
            <br><br>
            
            <b>Edition:</b><br>
            <input type='text' name='edition'class="tb6" size='35' style="background-color: white;"  >
            <br><br>
            
            <b>ISBN:</b><br>
            <input type='text' name='isbn'class="tb6" size='35' style="background-color: white;"  >
            <br><br>
            
            <b>PAGES:</b><br>
            <input type='text' name='pages'class="tb6" size='35'style="background-color: white;" >
            <br><br>

            <b>Author Name:</b><br>
            <input type='text' name='author'class="tb6" size='35'style="background-color: white;" >
            <br><br>
            
            <b>PRICE:</b><br>
            <input type='text' name='price'class="tb6" size='35'style="background-color: white;" >
            <br><br>

            <b>Quantity:</b><br>
            <input type='text' name='Quantity'class="tb6" size='35'style="background-color: white;" >
            <br><br>
            
            <b>Image:</b>
            <input type='file' name='img'size='100' style="margin-left: 430px" >
            <br>
            
            
            <b>E-Book:</b>
            <input type='file' name='ebook' size='100'style="margin-left: 430px" >
            <br>
            
            <input  type='submit' class="btn btn-lg btn-info"  value='   SUBMIT   '  >
        </form></div></div>
      </div>
      
    </div>
    
  </div>




      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>