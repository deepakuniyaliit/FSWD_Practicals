<?php
session_start();
$con = mysqli_connect('localhost', 'root', '1234');
mysqli_select_db($con, 'BookStore');

if (isset($_POST['submitbtn'])) {
    $bname = $_POST['bookName'];
    $aname = $_POST['authorName'];
    $isbn = $_POST['isbnNumber'];
    $pbname = $_POST['publisherName'];
    $numpages = $_POST['noOfPages'];
    $pbyear = $_POST['publicationYear'];
    $btype = $_POST['booktype'];

    $query = "insert into books(bookName,authorName,isbnNumber,publisherName,publicationYear,noOfPages,bookType) values ('$bname','$aname','$isbn','$pbname','$pbyear','$numpages','$btype')";
    mysqli_query($con, $query);
}


?>
<html>
    <head>
    <title>
        Library
    </title>
    </head>
    <body>
        <form method="POST" action="book.php">
            Book Name: <input type="text" name="bookName" placeholder="Enter book name" required><br><br>
            Author Name: <input type="text" name="authorName" placeholder="Enter author name" required><br><br>
            isbn Number: <input type="text" name="isbnNumber" placeholder="Enter ISBN number" required><br><br>
            publisher name: <input type="text" name="publisherName" placeholder="Enter publisher name" required><br><br>
            Publication year: 
            <select name="publicationYear" id="pbyear">
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
            </select>
            <br><br>
            no of pages: <input type="text" name="noOfPages" placeholder="Enter no of pages" required><br><br>
            book type
            Action <input type="radio" name="booktype" value="action" checked>
            Adventure <input type="radio" name="booktype" value="Adventure">
            Classic <input type="radio" name="booktype" value="Classic">
            Comic Book <input type="radio" name="booktype" value="Comic">
            Graphic Novel <input type="radio" name="booktype" value="Graphic">
            Detective <input type="radio" name="booktype" value="Detective">
            Mystery <input type="radio" name="booktype" value="Mystery">
            Historical Fiction <input type="radio" name="booktype" value="Historical">
            Horror <input type="radio" name="booktype" value="Horror">
            Literary Fiction <input type="radio" name="booktype" value="Literary">
            <br><br>
            <input type="submit" name="submitbtn">
        </form>
    </body>
</html>