<?php
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
  margin-top: 20px;
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
  border: 3px solid #73AD21;

  margin-left: 50px;
  margin-right: 50px;
 height: 80px;
 width: 200px;
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

  .table{
   margin-left: 250px;
  

  }

      .con1{
    background-color: white;
    border-style: round;
    color: black;
    font-style: white;
    height: 700px;
    border-radius: 25px;
    margin-top: 30px;
    border: 3px solid #73AD21;
   
   background-color:rgba(255,255,255,0.8);
  
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
              <h3 class="masthead-brand">BookStore</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="Home.html">Home</a></li>
                  <li class="active"><a href="inventory.php">Inventory</a></li>
                  <li><a href="addbook.php">Add Books</a></li>
                   <li ><a href="removebook.php">Remove Books</a></li>
                   <li><a href="Feedbacks.php">Feedbacks Received</a></li>
                  <li><a href="Store.php">All Books</a></li>
                  <li><a href="http://localhost/BookStore/main/cover/cover.html">Logout</a></li>
                </ul>
              </nav>
            </div>
          </div>



 <div class="container"><div class="con1">  

 <h1> Inventory</h1>
		<div class='table' >

			<table style="margin-top: -60px;">
       <!--  <div class="flex-container"> -->
        <tr>
          <td><h3>Book Name</h3></td>
          <td><h3>Stock Used</h3></td>
          <td><h3>Stock Remaining</h3></td>

        </tr>
   <!--      </div> -->
        <?php
          
          // include("allbooks.php");


		   $q="select * from Inventory";
           $res=mysqli_query($conn,$q) or die("Can't Execute Query...");

          while($row=mysqli_fetch_assoc($res)){

			$q2 ="select * from Books where BookID = $row[BookID]";
      $res2=mysqli_query($conn,$q2) or die("Can't Execute Query...");
      $row1=mysqli_fetch_assoc($res2);

			echo "
			<br>
		<tr>
		<div class='flex-container' > 
				<br>						
					<td>$row1[BookName]</td>
					
					<td> $row[StockLevelUsed]</td>
					<td> $row[StockLevelNew]</td>
			
				</div>
</tr>
			";
										
			}
           
        ?></table> </div></div></div>
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