<<?php 
	include "connection.php"
	include "register.php"
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Q1</title>
</head>

<body>
    <form action="back.php" method="post">
        <h1 align="center">HTML Form</h1><br><br>
        <label for="BookName">Book Name:</label>
        <input type="text" name="BookName" id="BookName">
        <br><br><br>
        <label for="AuthorName">Author Name:</label>
        <input type="text" name="AuthorName" id="AuthorName">
        <br><br><br>
        <label for="isbnNumber">ISBN Number:</label>
        <input type="text" name="isbnNumber" id="isbnNumber">
        <br><br><br>
        <label for="pubname">Publisher Name:</label>
        <input type="text" name="pubname" id="pubname">
        <br><br><br>
        <label for="pubYear">Publication Year:</label>
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
        <br><br><br>
        <label for="noOfPages">No.Of Pages:</label>
        <input type="range" name="noofPages" id="noofPages" min="200" max="400">
        <br><br><br>
        <label for="bookType">Book Type:</label>


        <input type="radio" name="Action" id="Action">
        <label for="Action">Action</label>

        <input type="radio" name="Adventure" id="Adventure">
        <label for="Adventure">Adventure</label>

        <input type="radio" name="Classics" id="Classics">
        <label for="Classics">Classics</label>

        <input type="radio" name="Comic" id="Comic">
        <label for="ActComicion">Comic</label>

        <input type="radio" name="Book" id="Book">
        <label for="Book">Book</label>

        <input type="radio" name="Graphic Novel" id="Graphic Novel">
        <label for="Graphic Novel">Graphic Novel</label>

        <input type="radio" name="Detective" id="Detective">
        <label for="Detective">Detective</label>

        <input type="radio" name="Mystery" id="Mystery">
        <label for="Mystery">Mystery</label>

        <input type="radio" name="Historical Fiction" id="Historical Fiction">
        <label for="Historical Fiction">Historical Fiction</label>

        <input type="radio" name="Horror" id="Horror">
        <label for="Horror">Horror</label>

        <input type="radio" name="Literary Fiction" id="Literary Fiction">
        <label for="Literary Fiction">Literary Fiction</label>

        <br><br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>