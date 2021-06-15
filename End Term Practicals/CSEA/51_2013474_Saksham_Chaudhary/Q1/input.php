<?php
include('configuration.php')
?>
<?php
    if (isset($_POST['submit'])) {
            $bookname = $_POST['bookname'];
            $auth = $_POST['authname'];
            $isbn = $_POST['isbn'];
            $publisher = $_POST['publisher'];
            $year = $_POST['year'];
            $type = $_POST['btype'];
            $pages = $_POST['pages'];

            $sql2 = "INSERT INTO `users` (`bookname`, `author`, `isbn`, `publisher`, `year`, `type`, `pages`) VALUES ('$bookname', '$auth', '$isbn', '$publisher', '$year', '$type', '$pages')";
             mysqli_query($conn, $sql2);


    }
?>
<html>

<head>
    <title>Form</title>
        <style type="text/css">
        .input{
            background-color: green;

        }
        .text{
            text-align: center;
            color: red;
        }
    </style>

</head>

<body>
    <h1 class="text">Form</h1>
    <div align="center" class="input">
        <table>
   <form action="input.php" method="POST" name="form1">
        <tr><td>Book Name</td><td colspan="2"><input type="text" name="bookname" id="bookname" required></td></tr>
        <tr><td>Author Name</td><td colspan="2"><input type="text" name="authname" id="authname" required></td></tr> 
        <tr><td>ISBN Number</td><td colspan="2"><input type="text" name="isbn" id="isbn"  required></td></tr> 
        <tr><td>Publisher Name</td><td colspan="2"><input type="text" name="publisher" id="publisher"  required></td></tr> 
        <tr><td>Publication Year</td><td colspan="2"><select  name="year" id="year">
                        <option value="Select year" selected>Select year</option>
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
                 </select></td></tr> 
        <tr><td>Book Type</td><td colspan="2">Action <input type="radio" value="Action" name="btype"><br>
            Adventure <input type="radio" value="Adventure" name="btype"><br>
            Classics <input type="radio" value="Classics" name="btype"><br>
            Comic Book <input type="radio" value="Comic_Book" name="btype"><br>
            Graphic Novel <input type="radio" value="Graphic_Novel" name="btype"><br>
            Detective <input type="radio" value="Detective" name="btype"><br>
            Mystery <input type="radio" value="Mystery" name="btype"><br>
            Historical Fiction <input type="radio" value="Historical_Fiction" name="btype"><br>
            Horror <input type="radio" value="Horror" name="btype"><br>
            Literary Fiction <input type="radio" value="Literary_Fiction" name="btype"><br></td>
        <tr><td>No of Pages</td><td colspan="2"><input type="number" name="pages" min="200" max="400"></td></tr>       
       
            
        <tr><td></td><td colspan="2" ><input type="submit" name="submit" value="SUBMIT"></td></tr>
    </form>
</table><br><br>

   

   
</div>
</body>

</html>