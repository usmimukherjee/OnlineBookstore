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
                  <li class="dropdown " >
                <a href="#" data-toggle="dropdown" style="background-color: transparent;">Category <span class="caret"></span></a>
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


          <div class="flex-site">
        <!-- <div class="header-flex-container">
           
            <div class="search-wrap">
                <form class="inputSearchBooks" action="/search">
                    <input type="text" placeholder="Search for books by  title / author " aria-label="Search for books by keyword / title / author " name="searchTerm" class="text-input" value="">
                    <button aria-label="Search" class="header-search-btn" type="submit"><span class="text">Search</span></button>
                </form>
            </div>
        </div> -->
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
    <?php
        //$search=$_GET['search'];
   // $query="select * from Books where BookName like '%$search%'";
    
    //$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
    ?>





           <div class="container">    
    <div class='table'>
      <table>
        <?php
          


  $cat=$_GET['Category_name'];

  
  $q = "select * from Books where Category_name='$cat' ";
  $res = mysqli_query($conn,$q) or die("Can't Execute Query..");

     echo "     <strong><h2>$cat</h2> </strong> ";


          while($row1=mysqli_fetch_assoc($res)){

      
       
      echo "
      <br>
    <td>
    <div class='flex-container' > 
        <br>
        <p><img src='../$row1[BookImage]' height='300' width='200'/></p>           
          <p><strong><h2>$row1[BookName]</h2></p></strong>
          <p>Author : $row1[AuthorName]</p>
          <p>Price :&#8377 $row1[Price]</p>
          
        </div>
       
        <a href='details.php?BookName=".$row1["BookName"]."' class='btn btn-lg btn-danger'> View </a>
         

          <a class='btn btn-lg btn-warning'  href='process_cart.php?BookName=".$row1["BookName"]."&Category_name=".$row1["Category_name"]."&Price=".$row1["Price"]."' > Add to Cart </a>
       
        </div><br><br>
</td>
      ";
                    
      }
           
        ?></table> </div>
    </div>
      </div> 

   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
   
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>