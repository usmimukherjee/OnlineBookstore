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
  border: 3px solid #73AD21;

  margin-left: 30px;
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
  margin-left: 10px;
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
    height: 500px;
    border-radius: 25px;
    margin-top: 30px;
    border: 3px solid #73AD21;
   
   background-color:rgba(255,255,255,0.9);*/
  
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
                  <li ><a href="inventory.php">Inventory</a></li>
                  <li><a href="addbook.php">Add Books</a></li>
                   <li ><a href="removebook.php">Remove Books</a></li>
                   <li class="active"><a href="Feedbacks.php">Feedbacks Received</a></li>
                  <li><a href="Store.php">All Books</a></li>
                  <li><a href="http://localhost/BookStore/main/cover/cover.html">Logout</a></li>
                </ul>
              </nav>
            </div>
          </div>



 <div class="container"><div class="con1">  
 <h1> Feedbacks</h1>

		<div class='table' style="margin-left: 160px;">
			<table>
       <!--  <div class="flex-container"> -->
        <tr>
           <td><h3>Date</h3></td>
          <td><h3>Customer Name</h3></td>
          <td><h3>Customer Email</h3></td>
          <td><h3>Feedback</h3></td>

        </tr>
   <!--      </div> -->
        <?php
          
          // include("allbooks.php");


		   $q="select * from Feedback";
           $res=mysqli_query($conn,$q) or die("Can't Execute Query...");

          while($row=mysqli_fetch_assoc($res)){

			echo "
			<br>
		<tr>
		<div class='flex-container' > 
				<br>						
					<td>$row[Feedbackdate]</td>
          <td>$row[Name]</td>
					<td> $row[Email]</td>
					<td> $row[CustomerFeedback]</td>
			
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