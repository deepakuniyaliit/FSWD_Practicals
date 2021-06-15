<!DOCTYPE html>
<html lang="en">
<head>
    <title>Q1</title>
</head>
<body>
    <form action="back.php" method="post">
        <label for="BookName">BookName:</label>
        <input type="text" name="BookName" id="BookName">
        <br>
        <label for="isbnNumber">isbnNumber:</label>
        <input type="text" name="isbnNumber" id="isbnNumber">
        <br>
        <label for="pubname">pubname:</label>
        <input type="text" name="pubname" id="pubname">
        <br>
        <label for="pubYear">pubYear:</label>
        <select id="pubYear" name="pubYear">
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
        <input type="range" name="noofPages" id="noofPages" min="200" max="400">
        <br>
        <label for="bookType">bookType:</label>
     
        <label for="Action">Action:</label>
        <input type="radio" name="BookType" id="Action">
  
        <label for="Adventure">Adventure:</label>
        <input type="radio" name="BookType" id="Adventure">

        <label for="Classics">Classics:</label>
        <input type="radio" name="BookType" id="Classics">

        <label for="ActComicion">Comic:</label>
        <input type="radio" name="BookType" id="Comic">

        <label for="Book">Book:</label>
        <!-- <input type="radio" name="Book" id="Book"> -->

        <label for="Graphic Novel">Graphic Novel:</label>
        <input type="radio" name="Book" id="Graphic Novel">

        <label for="Detective">Detective:</label>
        <input type="radio" name="Book" id="Detective">

        <label for="Mystery">Mystery:</label>
        <input type="radio" name="Book" id="Mystery">

        <label for="Historical Fiction">Historical Fiction:</label>
        <input type="radio" name="Book" id="Historical Fiction">

        <label for="Horror">Horror:</label>
        <input type="radio" name="Book" id="Horror">
 
        <label for="Literary Fiction">Literary Fiction:</label>
        <input type="radio" name="Book" id="Literary Fiction">
        <br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>

<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
}


?>
