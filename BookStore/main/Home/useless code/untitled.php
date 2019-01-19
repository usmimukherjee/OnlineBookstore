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
                  <li><a href="#">Home</a></li>
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
                  <li><a href="#">Re-Sell</a></li>
                 <!--  <li ><a href="http://localhost/BookStore/main/Store/Store.html">Store</a></li> -->
                  <li><a href="#">Cart</a></li>
                  <li><a href="#">Feedback</a></li>
                  <li><a href="#">Return</a></li>
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
        <form method="POST" action="../Store/Store_result.php">
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


        <div id="page">
          <!-- start content -->
          <div id="content">
            <div class="post">
              <h1 class="title">Viewcart</h1>
              <div class="entry">
            
              <pre><?php
              //  print_r($_SESSION);
              ?></pre>
            
              <form action="process_cart.php" method="POST">
              <table width="100%" border="0">
                <tr >
                  <Td> <b>No
                  <td> <b>Category
                  <td> <b>Product
                  <td> <b>Qty
                  <td> <b>Rate
                  <td> <b>Price
                  <td> <b>Delete
                </tr>
                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
              
                <?php
                  $tot = 0;
                  $i = 1;
                  if(isset($_SESSION['cart']))
                  {

                  foreach($_SESSION['cart'] as $id=>$x)
                  { 
                    echo '
                      <tr>
                      <Td> '.$i.'
                      <td> '.$x['Category_name'].'
                      <td> '.$x['BookName'].'
                      <td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
                      <td> '.$x['Price'].'
                      <td> '.($x['qty']*$x['Price']).'
                      <td> <a href="process_cart.php?id='.$id.'">Delete</a>
                    </tr>
                    ';
                    
                    $tot = $tot + ($x['qty']*$x['Price']);
                    $i++;
                  }
                  }
                
                ?>
              <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                
              <tr>
              <td colspan="6" align="right">
              <h4>Total:</h4>
              
              </td>
              <td> <h4><?php echo $tot; ?> </h4></td>
              </tr>
              <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
              
              <Br>
                </table>            

                <br><br>
              <center>
              <input type="submit" value=" Re-Calculate " > 
              <a href="checkout.php">CONFIRM & PROCEED<a/>
              </center>
              </form>
              </div>
              
            </div>
            
          </div>
   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
   
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>