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
    .con1{
    background-color:rgba(255,255,255,0.75);
    border-style: round;
    color: black;
    font-style: white;
    height: 860px;
    border-radius: 25px;
    margin-top: 30px;
    border: 3px solid #73AD21;
    padding: 20px; 
  }


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
                  <li class="active" ><a href="viewcart.php">Cart</a></li>
                  <li><a href="feedback.php">Feedback</a></li>
                  <!-- <li><a href="#">Return</a></li> -->
                  <li><a href="http://localhost/BookStore/main/cover/cover.html">Logout</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="container"><div class="con1">

               <h3> SHIPPING DETAILS </h3><br><br>
      
    
      <div  class="form">
        <form id="contactform" method="POST" action="process_checkout.php" > 
          
          <p><label for="name">Name</label></p> 
          <input id="name" name="name"  class="tb6" " placeholder="First and Last name" required="" tabindex="1" type="text"><br> <br>
           
          <p><label for="email">Address</label></p> 
          <textarea id="address" class="tb6" name="address"  placeholder="Address" required="" cols="55" row="10"type="email"> </textarea><br><br>
                
               <br> <p><label for="username">Postal Code</label></p> 
          <input id="pc" name="pc" class="tb6"  required="" tabindex="2" type="text"> <br>
           
           <br>  <p><label for="city">City</label></p> 
          <input type="text" class="tb6"  id="city" name="city" required="" ><br><br>

           <br>     <p><label for="state">State</label></p> 
          <input type="text" class="tb6"  id="state" name="state" required="" ><br><br>

          <br>  <p><label for="phone">Mobile phone</label></p> 
            <input id="phone" class="tb6"  name="phone" placeholder="phone number" required="" type="text"> <br><br>

            <input class="btn btn-danger" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit">

           
   </form> 

</div></div>
        
   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
   
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>