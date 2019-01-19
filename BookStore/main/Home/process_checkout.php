<?php session_start();
 extract($_POST);
 extract($_SESSION);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookstore";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     } 

  $name = $_POST['name'];
  $address = $_POST['address'];
  $pc  = $_POST['pc'];
  $city  = $_POST['city'];
  $state  = $_POST['state'];
  $phone = $_POST['phone'];

 
  $query="INSERT INTO shipping_details(name,address,postal_code,city,state,phone) values('$name','$address','$pc','$city','$state','$phone')";
  
  $res=mysqli_query($conn,$query) or die("Can't Execute Query...");
 
  
  
   

 
  
 header("location:payment_details.php");
  ?>