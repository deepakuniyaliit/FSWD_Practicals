<?php
   require_once('config.php');
   if(isset($_POST['submit'])){
        $BookName = $_POST['BookName'];
        $AuthorName = $_POST['AuthorName'];
        $isbnNumber = $_POST['isbnNumber'];
        $pubname = $_POST['pubname'];
        $pubYear = $_POST['pubYear'];
        $noOfPages = $_POST['noOfPages'];
        $bookType = $_POST['bookType'];
        $sql = "INSERT INTO `bookDetails` (`BookName`, `AuthorName`,`isbnNumber`, `pubname`, `pubYear`,`noOfPages`,`bookType`) VALUES ('$BookName', '$AuthorName','$isbnNumber ', '$pubname','$pubYear','$noOfPages','$bookType')";

        if (!(mysqli_query($conn, $sql))) {
            echo "Invalid Query";
        }
   }  
?>
<html lang="en">
<head>
    <title>Q1</title>
</head>
<body>
    <form action="form.php" method="post">
        <label for="BookName">BookName:</label>
        <input type="text" name="BookName" id="BookName">
        <br>
        <label for="AuthorName">AuthorName:</label>
        <input type="text" name="AuthorName" id="AuthorName">
        <br>
        <label for="isbnNumber">isbnNumber:</label>
        <input type="text" name="isbnNumber" id="isbnNumber">
        <br>
        <label for="pubname">pubname:</label>
        <input type="text" name="pubname" id="pubname">
        <br>
        <label for="pubYear">pubYear:</label>
        <select name="pubYear">
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
        <label for="noOfPages">noOfPages:</label>
        <input type="number" name="noOfPages" id="noOfPages" min=200 max=400>
        <br>
        <label for="bookType">bookType:</label>
        <input type="radio" name="bookType" value="Action">Action<br>
        <input type="radio" name="bookType" value="Adventure">Adventure<br>
        <input type="radio" name="bookType" value="Classics">Classics<br>
        <input type="radio" name="bookType" value="Comic Book">Comic Book<br>
        <input type="radio" name="bookType" value="Graph Novel">Graph Novel<br>
        <input type="radio" name="bookType" value="Detective">Detective<br>
        <input type="radio" name="bookType" value="Mystery">Mystery<br>
        <input type="radio" name="bookType" value="Historical Fiction">Historical Fiction
        <br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</body>
</html>