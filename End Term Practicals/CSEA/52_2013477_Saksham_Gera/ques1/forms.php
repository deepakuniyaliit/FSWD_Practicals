<html>
    <head>
        <title>
            Book
        </title>

    </head>
    <body>
        <form method="POST" action="insert.php">
            Book Name <input type="text" placeholder="Enter The Book Name" name="bname" required><br><br>
            Author Name <input type="text" placeholder="Enter The Author Name" name="aname" required><br><br>
            ISBN Number <input type="text" placeholder="Enter The ISBN Number" name="isbn" required><br><br>
            Publisher Name <input type="text" placeholder="Enter The Publisher Name" name="pname" required><br><br>
            <br>Publication Year<br>
            <select name="pyear" required>
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
            <table>
            <tr><td>Action <input type="radio" value="Action" name="btype"><br></td>
            <td>Adventure <input type="radio" value="Adventure" name="btype"><br></td></tr>
           <tr><td> Classics <input type="radio" value="Classics" name="btype"><br></td>
           <td> Comic Book <input type="radio" value="Comic_Book" name="btype"><br></td></tr>
           <tr><td> Graphic Novel <input type="radio" value="Graphic_Novel" name="btype"><br></td>
            <td>Detective <input type="radio" value="Detective" name="btype"><br></td></tr>
            <tr><td>Mystery <input type="radio" value="Mystery" name="btype"><br></td>
           <td> Historical Fiction <input type="radio" value="Historical_Fiction" name="btype"><br></td></tr>
           <tr><td> Horror <input type="radio" value="Horror" name="btype"><br></td>
            <td>Literary Fiction <input type="radio" value="Literary_Fiction" name="btype"><br></td></tr>
        </table>
            <br>
            Number Of Pages (200 - 400)<br>
            <input type="number" name="volume" min="200" max="400"> <br><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>