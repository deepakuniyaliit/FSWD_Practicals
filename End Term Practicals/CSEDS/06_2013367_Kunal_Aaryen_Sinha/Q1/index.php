<?php
   require_once('configration.php');
   if(isset($_POST['submit'])){
        $bookName = $_POST['bookName'];
        $authorName = $_POST['authorName'];
        $isbnNumber = $_POST['isbnNumber'];
        $publisherName = $_POST['publisherName'];
        $publicationYear = $_POST['publicationYear'];
	    $noOfPages = $_POST['noOfPages'];
	    $bookType = $_POST['bookType'];
        $sql = "INSERT INTO `Book` ('bookName', 'authorName', 'isbnNumber', 'pubName', 'pubYear', 'noOfPages', 'bookType') VALUES ('$bookName', '$authorName', '$isbnNumber', '$publisherName', '$publicationYear', '$noOfPages', '$bookType')";
        if (!(mysqli_query($conn, $sql))) {
            echo "Invalid Query ". $conn->error;
        }
        else{
            echo"Successfull";
        }
   }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form method="POST" action="">
            bookName <input type="text" name="bookName" required><br><br>

            authorName <input type="text" name="authorName" required><br><br>

            isbnNumber <input type="text" name="isbnNumber" required><br><br>

            publisherName <input type="text" name="publisherName" required><br><br>

	    publicationYear 
	    <select name="publicationYear" required>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
	    </select> <br><br>

	    noOfPages <input type="number" name="noOfPages" min="200" max="400" required><br><br>

            bookType <input type="radio" name="bookType" value="Action" required/>Action
                <input type="radio" name="bookType" value="Adventure" required/>Adventure
                <input type="radio" name="bookType" value="Classics" required/>Classics
	            <input type="radio" name="bookType" value="Comic Book" required/>Comic Book
	    	    <input type="radio" name="bookType" value="Graphic Novel" required/>Graphic Novel
    		    <input type="radio" name="bookType" value="Detective" required/>Detective
                <input type="radio" name="bookType" value="Mystery" required/>Mystery
                <input type="radio" name="bookType" value="Historical Fiction" required/>Historical Fiction
                <input type="radio" name="bookType" value="Horror" required/>Horror
                <input type="radio" name="bookType" value="Literary Fiction" required/>Literary Fiction <br><br>
                <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>