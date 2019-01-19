<?php session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookstore";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     } 


// $_SESSION['cart'][] = array("BookName"=>$_GET['BookName'],"Category_name"=>$_GET['Category_name'],"Price"=>$_GET['Price'],"qty"=>);


   $BookName = $_SESSION['cart']["BookName"]; 
   $Category_name = $_SESSION['cart']['Category_name'];
   // $Price = $_SESSION['cart']['Price'];
   $qty = $_SESSION['cart']['qty'];

   $sql1 = "SELECT * FROM Customer where FirstName ='$_SESSION[unm]' ";
   $res1=mysqli_query($conn,$sql1) or die("Can't Execute Query...");
 
   $row1=mysqli_fetch_assoc($res1);

   $sql2 = "SELECT * FROM Books where BookName ='$BookName' ";
   $res2=mysqli_query($conn,$sql2) or die("Can't Execute Query...");
 
   $row2=mysqli_fetch_assoc($res2);  
  
   $CustomerID = $row1[CustomerID];

   $Date = date("Y/m/d"); 

   $BookID = $row2[BookID];

   $sql3 = "INSERT INTO Orders(CustomerID,OrderDate,Total,BookID,Quantity) values($CustomerID,'$Date',$tot,$BookID,$qty)"; 
   $res2=mysqli_query($conn,$sql3) or die("Can't Execute Query...");

     header("location: checkout.php");
 

   ?>