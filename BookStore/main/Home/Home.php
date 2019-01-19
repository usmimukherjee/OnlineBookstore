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
                  <li class="active"><a href="#">Home</a></li>
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
   
        </div>
        <div class="content-wrap">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img src="img/img1.jpg" style="width:100%">
                </div>
        
             <!--    <div class="mySlides fade">
                    <img src="img/img2.jpg" style="width:100%">
                </div> -->
        
                <div class="mySlides fade">
                    <img src="img/img3.png" style="width:100%">
                </div>

            </div>
            <!-- Books container -->
            <div class="block-wrap">
                <div class="block-header">
                    <h3>Best Sellers</h3>
                </div>
                <div class="block-content">
                    <div class="element">
                        <img src="img/books/book-0.jpg" alt="#">
                        <span class="price-0 price"> ₹299</span>
                    </div>
                    <div class="element">
                        <img src="img/books/book-1.jpg" alt="#">
                        <span class="price-1 price">₹299</span>
                    </div>
                    <div class="element">
                        <img src="img/books/book-2.jpg" alt="#">
                        <span class="price-2 price">₹299</span>
                    </div>
                    <div class="element">
                        <img src="img/books/book-3.jpg" alt="#">
                        <span class="price-3 price">₹299</span>
                    </div>
                    <div class="element">
                        <img src="img/books/book-4.jpg" alt="#">
                        <span class="price-4 price">₹299</span>
                    </div>
                    <div class="element">
                        <img src="img/books/book-5.jpg" alt="#">
                        <span class="price-5 price">₹199</span>
                    </div>
                    <div class="element">
                        <img src="img/books/book-6.jpg" alt="#">
                        <span class="price-6 price">₹199</span>
                    </div>
                    <div class="element">
                        <img src="img/books/book-7.jpg" alt="#">
                        <span class="price-7 price">₹199</span>
                    </div>
                    <div class="element">
                        <img src="img/books/book-8.jpg" alt="#">
                        <span class="price-8 price">₹199</span>
                    </div>
                    <div class="element">
                        <img src="img/books/book-9.jpg" alt="#">
                        <span class="price-9 price">₹199</span>
                    </div><br><br>

                <a type='button' class='btn btn-md btn-warning' href="bestseller.php" ><br><br><br><br><br> View<br> More</a>


                </div>
            </div>
        </div>
        <footer class="footer-quote">
            <h2>&#34;We are what we read&#34;</h2>
            <p>A book is a gift you can open again and again
            <br>-- Garrison Keillor</p>
        </footer>


  <script type="text/javascript">
    var slideIndex = 0;
carousel();

function carousel() {

    var x = document.getElementsByClassName("mySlides");
    for (var i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 1600); // Change image every 4 seconds

}


  </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
   
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>