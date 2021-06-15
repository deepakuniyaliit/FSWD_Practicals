<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "MyUsers");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Book_ID = $_REQUEST['Book_ID'];
		$Book_Name = $_REQUEST['Book_Name'];
		$Author= $_REQUEST['Author'];
		$ISBN = $_REQUEST['ISBN '];
        $Publisher= $_REQUEST['Publisher'];
        $Publication_Year= $_REQUEST['Publication_Year'];
		$Pages = $_REQUEST['Pages'];
        $Book_Type= $_REQUEST['Book_Type'];
        
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO  crud VALUES ('$Book_ID',
			'$Book_Name','$Author','$ISBN ','$Publisher',' $Publication_Year','$Pages','$Book_Type')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$Book_ID,
			$Book_Name,$Author,$ISBN ,$Publisher, $Publication_Year,$Pages,$Book_Type");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>

