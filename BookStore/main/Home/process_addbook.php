<?php
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
else{
if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['publisher'])|| empty($_POST['edition']) || empty($_POST['isbn']) || empty($_POST['pages']) || empty($_POST['price']))
		{
			$msg[]="Please full fill all requirement";
		}
		if(!(is_numeric($_POST['price'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		if(!(is_numeric($_POST['pages'])))
		{
			$msg[]="Page must be in Numeric  Format...";
		}
		
		if(empty($_FILES['img']['name']))
		$msg[] = "Please provide a file";
	
		if($_FILES['img']['error']>0)
		$msg[] = "Error uploading file";
		
				
		if(!(((substr($_FILES['img']['name'],-4))==".jpg" ||(substr($_FILES['img']['name'],-5))==".jpeg"||(substr($_FILES['img']['name'],-4))==".gif")||(substr($_FILES['img']['name'],-4))==".png"))
			$msg[] = "wrong file  type";
			
		if(file_exists("../upload_image/".$_FILES['img']['name']))
			$msg[] = "File already uploaded. Please do not updated with same name";
		
		if(empty($_FILES['ebook']['name']))
		$msg[] = "Please provide a document file";
	
		if($_FILES['ebook']['error']>0)
		$msg[] = "Error uploading document file";
		
		
		if(!((substr($_FILES['ebook']['name'],-4))==".pdf" ||(substr($_FILES['ebook']['name'],-4))==".ppt" ||(substr($_FILES['ebook']['name'],-5))==".pptx" ||(substr($_FILES['ebook']['name'],-4))==".doc"||(substr($_FILES['ebook']['name'],-4))==".txt"||(substr($_FILES['ebook']['name'],-5))==".docx"))
			$msg[] = "wrong document file  type";
			
		if(file_exists("../upload_ebook/".$_FILES['ebook']['name']))
			$msg[] = "Document File already uploaded. Please do not updated with same name";
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			// $move="../upload_image/"
			// move_uploaded_file($_FILES['img']['name'],$move );
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);

			$BookImage ="upload_image/".$_FILES['img']['name'];	
			// move_uploaded_file($_FILES['ebook']['name'] ,$move);

			move_uploaded_file($_FILES['ebook']['tmp_name'],"../upload_ebook/".$_FILES['ebook']['name']);

			$Book_pdf ="upload_ebook/".$_FILES['ebook']['name'];

	
		
			$BookName=$_POST['name'];
			$Category_name=$_POST['cat'];
			$Description=mysqli_escape_string($conn,$_POST['description']);
			$Book_Edition=$_POST['edition'];
			$PublisherName=$_POST['publisher'];			
			$Book_ISBN=$_POST['isbn'];
			$Pages=$_POST['pages'];
			$Price=$_POST['price'];
			$AuthorName=$_POST['author'];
			$Quantity=$_POST['Quantity'];
			
			
		
			
			$sql="INSERT INTO Books(BookImage,
			Book_pdf,
			BookName,
			Category_name,
			Description,
			Book_Edition,
			PublisherName,
			Book_ISBN,
			Pages,
			Price,
			AuthorName,
			Quantity)
			values('$BookImage',
			'$Book_pdf',
			'$BookName',
			'$Category_name',
			'$Description',
			'$Book_Edition',
			'$PublisherName',
			$Book_ISBN,
			$Pages,
			$Price,
			'$AuthorName',
			$Quantity)";

			// $result = mysql_query($query,$conn) or die(mysql_error());
			
			// mysqli_query($conn,$query) or die("Can't Connect to Query...");
			// if($result)
			if ($conn->query($sql) === TRUE) {
 
   				 header("location:resell.php");
			} else {
  				  echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
		
		}
	}
	else
	{
		header("location:Home.php");
	}
}
?>