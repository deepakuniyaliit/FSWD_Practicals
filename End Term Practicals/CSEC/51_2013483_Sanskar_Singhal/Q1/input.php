<html>
    <head>
        <title>
            Book
        </title>
    </head>
    <body>
        <form method="POST" action="addRecord.php">
            Book Name <input type="text" placeholder="Enter Book Name" name="bname" required><br><br>
            Author Name <input type="text" placeholder="Enter Author Name" name="aname" required><br><br>
            ISBN Number <input type="text" placeholder="Enter ISBN Number" name="isbn" required><br><br>
            Publisher Name <input type="text" placeholder="Enter Publisher Name" name="pname" required><br><br>
            <br>Publication Year<br>
            <select name="pyear">
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
            Action <input type="radio" value="Action" name="btype" required><br>
            Adventure <input type="radio" value="Adventure" name="btype" required><br>
            Classics <input type="radio" value="Classics" name="btype" required><br>
            Comic Book <input type="radio" value="Comic_Book" name="btype" required><br>
            Graphic Novel <input type="radio" value="Graphic_Novel" name="btype" required><br>
            Detective <input type="radio" value="Detective" name="btype" required><br>
            Mystery <input type="radio" value="Mystery" name="btype" required><br>
            Historical Fiction <input type="radio" value="Historical_Fiction" name="btype" required><br>
            Horror <input type="radio" value="Horror" name="btype" required><br>
            Literary Fiction <input type="radio" value="Literary_Fiction" name="btype" required><br>
            <br>
            Number Of Pages<br>
            <input type="number" name="volume" min="200" max="400" required> <br><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>