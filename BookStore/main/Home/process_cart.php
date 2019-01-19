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

  


  if(isset($_GET['BookName']) and isset($_GET['Category_name']) and isset($_GET['Price']))
  {
    //add item
    $_SESSION['cart'][] = array("BookName"=>$_GET['BookName'],"Category_name"=>$_GET['Category_name'],"Price"=>$_GET['Price'],"qty"=>"1");
   


    header("location: viewcart.php");



  }
  else if(isset($_GET['id']))
  {
    //del a item
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
    header("location: viewcart.php");
  }
  else if(!empty($_POST))
  {
    //update qty
    foreach($_POST as $id=>$val)
    {
      $_SESSION['cart'][$id]['qty']=$val;
      header("location: viewcart.php");
    }
  }


?>