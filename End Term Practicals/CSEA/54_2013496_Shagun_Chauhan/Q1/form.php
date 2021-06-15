<?php include("insert.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>

        <style>
            body {
                margin: 30px;
                padding: auto;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="">
            Book Name: <input type="text" placeholder="Enter Book Name" name="bname" id="bname" required><br><br>
            Author Name: <input type="text" placeholder="Enter Author Name" name="aname" id="aname" required><br><br>
            ISBN Number: <input type="text" placeholder="Enter ISBN Number" name="isbn" id="isbn" required><br><br>
            Publisher Name: <input type="text" placeholder="Enter Publisher Name" name="pname" id="pname" required><br><br>
            Publication Year: 
            <select name="pyear" id="pyear" required>
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
              </select><br><br>

            Number Of Pages: <input type="number" name="volume" id="volume" min="200" max="400" required> <br><br>

            Book Type: 
            Action <input type="radio" value="Action" name="btype" id="btype" required>
            Adventure <input type="radio" value="Adventure" name="btype" id="btype" required>
            Classics <input type="radio" value="Classics" name="btype" id="btype" required>
            Comic Book <input type="radio" value="Comic_Book" name="btype" id="btype" required>
            Graphic Novel <input type="radio" value="Graphic_Novel" name="btype" id="btype" required>
            Detective <input type="radio" value="Detective" name="btype" id="btype" required>
            Mystery <input type="radio" value="Mystery" name="btype" id="btype" required>
            Historical Fiction <input type="radio" value="Historical_Fiction" name="btype" id="btype" required>
            Horror <input type="radio" value="Horror" name="btype" id="btype" required>
            Literary Fiction <input type="radio" value="Literary_Fiction" name="btype" id="btype" required><br><br>

            <input type="submit" name="submit" id="submit">
        </form>
    </body>
</html>