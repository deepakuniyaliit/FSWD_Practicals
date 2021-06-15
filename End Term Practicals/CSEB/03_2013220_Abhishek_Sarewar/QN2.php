<?php
include('config1.php');
?>
<?php
$bookname = ''; 
$author = ''; 
$isbn = ''; 
$publisher = ''; 
$publicationyear = ''; 
$pages = ''; 
$booktype = ''; 
	if(isset($_POST['bookname'])){
		$bookname = $_POST['bookname'];
	}
	else{
		$bookname = ''; 
	}
	if (isset($_POST['author'])) {
		$author = $_POST['author'];
	}
	else{
		$author = ''; 
	}
	
    if (isset($_POST['isbn'])) {
		$isbn = $_POST['isbn'];
	}
	else{
        $isbn = '';  
	}


	if (isset($_POST['publisher'])) {
		$publisher = $_POST['publisher'];
	}
	else{
		$publisher = '';  
	}
	if (isset($_POST['publicationyear'])) {
		$publicationyear = $_POST['publicationyear'];
	}
	else{
		$publicationyear = '';   
    }
    if (isset($_POST['pages'])) {
		$pages = $_POST['pages'];
	}
	else{
        $pages = ''; 
    }

    if (isset($_POST['booktype'])) {
		$booktype = $_POST['booktype'];
	}
	else{
        $booktype = ''; 
    }
	
	if(isset($_POST['submit'])){
		
	
		 $sql1 = "INSERT INTO `book`(`id`, `bookname`, `author`, `isbn`, `publisher`, `pages`) VALUES (`id`, `bookname`, `author`, `isbn`, `publisher`, `pages`)";
		//  $sql2 = "INSERT INTO `student-details` (`username`, `branch`, `year`) VALUES ('$username', '$branch', '$year')";
		mysqli_query($conn, $sql1);
        // mysqli_query($conn, $sql2);
	}
	else{
		echo "Please click submit button to submit the data..";
	}
?>
