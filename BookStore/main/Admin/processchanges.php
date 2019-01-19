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

 $BookName = $_POST['BookName'];

$q1 = "DELETE FROM Books where BookName='$BookName' ";

$res=mysqli_query($conn,$q1) or die("Can't Execute Query...");


		
if ($conn->query($q1) === TRUE) { 
   				
   		header("location:removebook.php");

   		}
			
else {
  				 
  		 echo "Error: " . $q1 . "<br>" . $conn->error;

 		}

?>