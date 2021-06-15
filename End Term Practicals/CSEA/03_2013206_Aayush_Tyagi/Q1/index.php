<?php
include('config.php');
?>
<?php

if(isset($_POST['submit'])){
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
	$isbn = $_POST['isbn'];
    $publisher=$_POST['publisher'];
    $publicationYear=$_POST['publicationYear'];
    $pages = $_POST['pages'];
    $booktype=$_POST['booktype'];
	$sql =  "INSERT INTO `book` (`bookName`,`authorName`,`isbnNumber`,`publisherName`,`publicationYear`,`noOfPages`,`bookType`) 
    VALUES ('$bookname', '$author', '$isbn','$publisher','$publicationYear','$pages','$booktype')";
	$a = mysqli_query($conn , $sql);

}
?>

<html lang="en">

<head>

    <title>Book Store</title>
</head>

<body>
    <form method="post">

        Book Name <input type="text" name="bookname" required> <br> <br>
        Author name <input type="text" name="author"> <br> <br>
        isbn Number <input type="text" name="isbn"> <br> <br>
        publisher Name<input type="text" name="publisher"> <br> <br>
        <label>publication year</label>
        <select name="publicationYear" id="publicationYear">
            <option>Select Year</option>
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
        </select> <br> <br>
        <label> No of pages</label>
        <input type="range" name="pages" min="200" max="400" value="200"> <br><br>
        book type <input type="radio" name="booktype" value="Action">
        <label for="Action">Action</label>
        <input input type="radio" name="booktype" value="Adventure">
        <label for="Adventure">Adventure</label>
        <input type="radio" name="booktype" value="Classic">
        <label for="Classic">Classic</label>
        <input input type="radio" name="booktype" value="Comic">
        <label>Commic Book</label>

        <input type="radio" name="booktype" value="Graphic Novel">
        <label>Graphic Novel</label>
        <input input type="radio" name="booktype" value="Detective Mystery">
        <label>Detective Mystery</label>
        <input type="radio" name="booktype" value="Historical Fiction">
        <label>Historical Fiction</label>
        <input input type="radio" name="booktype" value="Horror">
        <label>Horror</label>
        <input input type="radio" name="booktype" value="Literary Fiction">
        <label>Literary Fiction</label> <br><br>


        <input type="Submit" value="Cilck Here to Submit Your Data" name="submit">
    </form>
</body>

</html>