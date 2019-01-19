<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookstore";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 // session_start();
  
  
  
  // $search=$_GET['s'];
  // $query="select * from BookStore where BookName like '%$search%'";
  
  // $res=mysqli_query($conn,$query) or die("Can't Execute Query...");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <style type="text/css">
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
 height: 300px;
 width: 400px;
/*   display: flex;*/
/*     flex-direction: row;*/
/*      flex-wrap: wrap;*/


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
    </style>

    <title>BookStore</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Store.css" rel="stylesheet">

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
                  <li class="active"><a href="Home.php">Home</a></li>
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
                  <li><a href="#">Feedback</a></li>
                  <!-- <li><a href="#">Return</a></li> -->
                  <li><a href="http://localhost/BookStore/main/cover/cover.html">Logout</a></li>
                </ul>
              </nav>
            </div>
          </div>



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

 <div class="container">    
    <div class='table'>
      <table>
        <?php
          
          // include("allbooks.php");


       $q="select * from Books";
           $res=mysqli_query($conn,$q) or die("Can't Execute Query...");

          while($row=mysqli_fetch_assoc($res)){

      
      // echo " <div class='col1-sm-4'>
        
      //      ";        
      echo "
      <br>
    <td>
    <div class='flex-container' > 
        <br>
        <p><img src='../$row[BookImage]' height='300' width='200'/></p>           
          <p><strong><h2>$row[BookName]</h2></p></strong>
          <p>Category : $row[Category_name]</p>
   
          <p>Author : $row[AuthorName]</p>
      
          <p>Price :&#8377 $row[Price]</p><p></p>
        </div><br>


        <a href='details.php?BookName=".$row["BookName"]."' class='btn btn-lg btn-danger'> View </a>
         

          <a class='btn btn-lg btn-warning'  href='process_cart.php?BookName=".$row["BookName"]."&Category_name=".$row["Category_name"]."&Price=".$row["Price"]."' > Add to Cart </a><br><br>
</td>
      ";
                    
      }
           
        ?></table> </div>
    </div>
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