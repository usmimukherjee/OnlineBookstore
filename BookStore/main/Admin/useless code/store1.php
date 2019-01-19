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
  
  
  
  $totalq="select count(*) \"total\" from Books ";
  
  $totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
  $totalrow=mysqli_fetch_assoc($totalres);
  
  
  $page_per_page=6;
  
  $page_total_rec=$totalrow['total'];
  
  $page_total_page=ceil($page_total_rec/$page_per_page);
  
  
  if(!isset($_GET['page']))
  {
    $page_current_page=1;
  }
  else
  {
    $page_current_page=$_GET['page'];
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

hr {
  margin-top: 40px;
  margin-bottom: 40px;
}
      .row1 {
  margin-bottom: 20px;
}
.row1.row1 {
  margin-top: 10px;
  margin-bottom: 0;
}
[class*="col1-"] {
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: #eee;
  background-color: rgba(86,61,124,.15);
  border: 1px solid #ddd;
  b
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
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Contact</a></li>
                  <li class="active"><a href="#">Store</a></li>
                  <li><a href="#">Cart</a></li>
                  <li><a href="#">Logout</a></li>
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
   <div id="page">
          <!-- start content -->
              <div id="content">
                <div class="post">
                  <h1 class="title"></h1>
                  <div class="entry">
                    
                    <table border="4" width="100%" >
                      <br><br><br><br><br>
                      <?php
                        
                        $k=($page_current_page-1)*$page_per_page;
                      
                        $query="select *from Books  LIMIT ".$k .",".$page_per_page;
  
                        $res=mysqli_query($conn,$query) or die("Can't Execute Query...");
  
                        $count=0;
                        while($row=mysqli_fetch_assoc($res))
                        {
                          if($count==0)
                          {
                            echo '<tr>';
                          } 
                          echo '<td valign="top" width="20%" align="center">
                            <img src="../'.$row[BookImage]'" width="80" height="100">
                          </td>';
                          $count++;             
                          
                          if($count==2)
                          {
                            echo '</tr>';
                            $count=0;
                          }
                        }
                      ?>
                      
                    </table>
                    
                    
                    <br><br><br>
                    <center>
                    <?php
                      
                      if($page_total_page>$page_current_page)
                      {
                        echo '<a href="store1.php?&page='.($page_current_page+1).'">Next</a>';
                      }
                      
                      for($i=1;$i<=$page_total_page;$i++)
                      {
                        echo '&nbsp;&nbsp;<a href="store1.php?'.'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
                      }
                      
                      if($page_current_page>1)
                      { 
                        echo '<a href="store1.php?&page='.($page_current_page-1).'">Previous</a>';
                      }
                      
                    ?>
                    </center>
                  </div>
                  
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