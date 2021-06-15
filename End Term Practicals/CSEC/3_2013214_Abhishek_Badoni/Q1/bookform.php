<?php
include 'config.php';
?>

<?php

    if(isset($_POST['submit']))
    {
        $bookname = $_POST['bookname'];
        $author = $_POST['author'];
        $isbn = $_POST['isbn'];
        $pname = $_POST['publisher'];
        $pyear = $_POST['year'];
        $pages = $_POST['pages'];
        $booktype = $_POST['booktype'];

        $insertQuery = mysqli_query($conn,"INSERT INTO bookdetails (bookName,authorName,isbnNumber,publisherName,publicationYear,noOfPages,bookType) VALUES ('$bookname','$author','$isbn','$pname','$pyear','$pages','$booktype')");

    }
    else
    {
        echo "Please click submit button to submit the data..";
    }
?>

<html>
<head>
    <body>
    <form method="POST" action="bookform.php">
        BOOK NAME:<input type="text" name="bookname" placeholder="Enter Book Name" required>
        <br>
        <br>
        AUTHOR NAME:<input type="text" name="author" placeholder="Enter Author's name" required>
        <br>
        <br>
        ISBN NUMBER:<input type="text" name="isbn" placeholder="Enter isbn number" required>
        <br>
        <br>
        PUBLISHER NAME:<input type="text" name="publisher" placeholder="Enter Publisher Name" required>
        <br>
        <br>
        PUBLICATION YEAR:
        <select name="year" id="year" required>
                    <option value="">Enter Publication Year</option>
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
        <br>
        <br>
        NO. OF PAGES:<input type="number" min="200" max="400" name="pages" placeholder="Enter No. of pages" required>
        <br>
        <br>

        BOOK TYPE:
        Action<input type="radio" name="booktype" value="Action">
        Adventure<input type="radio" name="booktype" value="Adventure">
        Classics<input type="radio" name="booktype" value="Classics">
        Comic Book<input type="radio" name="booktype" value="Comic Book">
        Graphic Novel<input type="radio" name="booktype" value="Graphic Novel">
        Detective<input type="radio" name="booktype" value="Detective">
        Mystery<input type="radio" name="booktype" value="Mystery">
        Historical Fiction<input type="radio" name="booktype" value="Historical Fiction">
        Horror<input type="radio" name="booktype" value="Horror">
        Literary Fiction<input type="radio" name="booktype" value="Literary Fiction">
        <br>
        <br>
        <input type="submit" name="submit" value="SUBMIT FORM">

    </form>
    </body>

</head>
</html>