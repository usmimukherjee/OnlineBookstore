<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookstore";

$Email=$_POST['Email'];

$Password=$_POST['Password'];


$FirstName=$_POST['FirstName'];


$LastName=$_POST['LastName'];


$Address=$_POST['Address'];


$PhoneNumber=$_POST['PhoneNumber'];


$Country=$_POST['Country'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql ="INSERT Into Customer(Email,Password,FirstName,LastName,Address,PhoneNumber,Country) values('$Email',
'$Password',
'$FirstName',
'$LastName',
'$Address',
$PhoneNumber,
'$Country')";

if ($conn->query($sql) === TRUE) {
    header("Location:../SignIn/index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>