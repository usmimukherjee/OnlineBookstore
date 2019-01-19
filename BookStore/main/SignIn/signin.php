<? session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if( isset($_POST['Email']) and isset($_POST['Password']) ) {
		
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];
 
		$ret=mysqli_query( $conn, "select * from  Customer where Email='$Email' and password='$Password'") or die("Could not execute query: " .mysqli_error($conn));
		
		$row = mysqli_fetch_assoc($ret);
	
		if(!$row) {
			header("Location:../cover/cover.html");
		}
		else if($Email == "admin@gmail.com" and $Password == "admin"){

			header("Location:../Admin/Home.html");

		}
		else {
	        
					$_SESSION=array();
					$_SESSION['unm']=$row['FirstName'];
					$_SESSION['uid']=$row['Password'];
					$_SESSION['status']=true;
			header('location:../Home/Home.php');
		}

}

// $conn->close;

?>



