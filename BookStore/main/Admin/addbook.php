<?php
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

    <title>BookStore</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Store.css" rel="stylesheet">
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
   /*background-color:rgba(255,255,255,0.89);*/
   background-color: white;
  }
        .tb6 {
  border:2px solid #456879;
  border-radius:10px;
  height: 50px;
  width: 450px;
}

    </style>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

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
              <h3 class="masthead-brand">BookStore</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="http://localhost/BookStore/main/Admin/Home.html">Home</a></li>
                 <li><a href="inventory.php">Inventory</a></li>
             <!--      <li ><a href="http://localhost/BookStore/main/Admin/Store.html">Store</a></li> -->
                  <li class="active"><a href="#">Add Books</a></li>
                  <!-- <li><a href="#">Add Category</a></li> -->
                  <li><a href="removebook.php">Remove Books</a></li>
                  <li><a href="Feedbacks.php">Feedbacks Received</a></li>
                  <li><a href="Store.php">All Books</a></li>
                  <li><a href="http://localhost/BookStore/main/cover/cover.html">Logout</a></li>
                </ul>
              </nav>
            </div>
          </div>
<div class="container"><div class="con1">
<div id="page">
  <!-- start content -->
  <div id="content">
    <div class="post" style="margin-left:10px">
      <h1 class="title" >Add Book</h1>
      <div class="entry" >
        <form action='process_addbook.php' method='POST' enctype="multipart/form-data">
        
            <br><b>Book Name:</b><br>
            <input type='text' class="tb6" name='name' size='35'style="background-color: white;">
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
            <textarea cols="40" class="tb6" rows="6" name='description' style="background-color: white;" ></textarea>
            <br><br>
            
            <b>Publisher:</b><br>
            <input type='text' class="tb6" name='publisher' size='35' style="background-color: white;" >
            <br><br>
            
            <b>Edition:</b><br>
            <input type='text'  class="tb6"name='edition' size='35' style="background-color: white;"  >
            <br><br>
            
            <b>ISBN:</b><br>
            <input type='text' class="tb6" name='isbn' size='35' style="background-color: white;"  >
            <br><br>
            
            <b>PAGES:</b><br>
            <input type='text' class="tb6" name='pages' size='35'style="background-color: white;" >
            <br><br>

            <b>Author Name:</b><br>
            <input type='text' class="tb6" name='author' size='35'style="background-color: white;" >
            <br><br>
            
            <b>PRICE:</b><br>
            <input type='text' class="tb6" name='price' size='35'style="background-color: white;" >
            <br><br>

            <b>Quantity:</b><br>
            <input type='text' class="tb6" name='Quantity' size='35'style="background-color: white;" >
            <br><br>
            
            <b>Image:</b>
            <input type='file' name='img' size='100' style="margin-left: 430px;" >
            <br>
            
            
            <b>E-Book:</b>
            <input type='file' name='ebook'  size='100' style="margin-left: 430px;" >
            <br>
            
            <input  type='submit' class="btn btn-lg btn-info"   value='   OK   '  >
        </form>
      </div>
      
    </div>
    
  </div></div></div>






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