<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookstore";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     } 




$unm = $_SESSION['unm'];


$q1 = "SELECT * from Customer where FirstName = '$unm' ";
$res1=mysqli_query($conn,$q1) or die("Can't Execute Query...");
$row1=mysqli_fetch_assoc($res1);

$email = $row1['Email'];

$id = $row1['CustomerID'];

$feedback =mysqli_escape_string($conn,$_POST['feedback']);


 $date = date("Y-m-d");

$q2 = "INSERT INTO Feedback(CustomerID,Feedbackdate,Email,Name,CustomerFeedback) VALUES( $id,'$date','$email','$unm','$feedback')";

$res2=mysqli_query($conn,$q2) or die("Can't Execute Query...");

header('location:Home.php');



?>