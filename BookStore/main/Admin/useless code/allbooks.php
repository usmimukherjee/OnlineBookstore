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
		

		 $q="select * from Books";
        $res=mysqli_query($conn,$q) or die("Can't Execute Query...");

          while($row=mysqli_fetch_assoc($res)){

			
			echo "<img src='../$row[BookImage]' height='300' width='200'/>";				
			echo "
										
			<p><strong><h2>$row[BookName]</h2></p></strong>
			<p>Category : $row[Category_name]</p>
			<p>Publisher : $row[PublisherName]</p>
			<p>Author : $row[AuthorName]</p>
			
			<p>Price :&#8377 $row[Price]</p>";							
			}

	?>