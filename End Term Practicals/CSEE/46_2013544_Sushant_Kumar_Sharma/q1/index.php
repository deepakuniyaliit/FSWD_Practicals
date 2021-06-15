<<?php 
	include "connection.php";
	include "register.php";
 ?>


 <!DOCTYPE html>
<html>
    <head>
        <title>
            Book
        </title>
    </head>
    <body>
        <form method="POST" action="index.php">
            Book Name <input type="string" placeholder="Enter Book Name" name="bookName"><br><br>
            Author Name <input type="string" placeholder="Enter Author Name" name="authorName"><br><br>
            ISBN Number <input type="string" placeholder="Enter ISBN Number" name="isbnNumber"><br><br>
            Publisher Name <input type="string" placeholder="Enter Publisher Name" name="publisherName"><br><br>
            <br>Publication Year<br>
            <select name="publicationYear">
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
              </select><br>
            <br> Book Type <br>
            Action <input type="radio" value="Action" name="bookType"><br>
            Adventure <input type="radio" value="Adventure" name="bookType"><br>
            Classics <input type="radio" value="Classics" name="bookType"><br>
            Comic Book <input type="radio" value="Comic_Book" name="bookType"><br>
            Graphic Novel <input type="radio" value="Graphic_Novel" name="bookType"><br>
            Detective <input type="radio" value="Detective" name="bookType"><br>
            Mystery <input type="radio" value="Mystery" name="bookType"><br>
            Historical Fiction <input type="radio" value="Historical_Fiction" name="bookType"><br>
            Horror <input type="radio" value="Horror" name="bookType"><br>
            Literary Fiction <input type="radio" value="Literary_Fiction" name="bookType"><br>
            <br>
            Number Of Pages<br>
            <input type="range" name="volume" min="200" max="400"> <br><br>
            <input type="submit" name="addToBase">
        </form>
    </body>
</<html>