<?php
include ('config.php');
?>

<?php
if(isset($_POST['submit']))
{
    $bookname=$_POST['bookname'];
    $authorname=$_POST['authorname'];
    $isbnnumber=$_POST['isbnnumber'];
    $publishername=$_POST['publishername'];
    $publicationyear=$_POST['publicationYear'];
    $numberofpages=$_POST['noOfPages'];
    $booktype=$_POST['booktype'];

    $sql="INSERT INTO BookStore (`Book Name`, `Author`, `ISBN`, `Publisher`, `Publication Year`, `Pages`, `Book Type`) VALUES ('$bookname','$authorname','$isbnnumber','$publishername','$publicationyear', '$numberofpages' ,'$booktype')";
    mysqli_query($comm,$sql);
}
?>

<html>
    <head>
        <title>HTML FORM</title>
    </head>
<body>
    <form method="POST" action="form.php">
        BOOK NAME <input type="text" name="bookname" placeholder="Type your bookname" required><br><br>
        AUTHOR NAME <input type="text" name="authorname" placeholder="Type your authorname" required><br><br>
        ISBN NUMBER <input type="tex" name="isbnnumber" placeholder="Type ISBN number" required><br><br>
        PUBLISHER NAME <input type="text" name="publishername" placeholder="Type publishername" required><br><br>
        PUBLICATION YEAR <select name="publicationYear" required>
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
        NUMBER OF PAGES <input type="number" name="noOfPages" min="0" max="50" placeholder="Type number of pages"><br><br>
        BOOK TYPE Action<input type="radio" name="booktype" value="action" required>
                  Adventure<input type="radio" name="booktype" value="adventure" required>
                  Classic<input type="radio" name="booktype" value="classic" required>
                  Comic<input type="radio" name="booktype" value="comic" required>
                  Graphic<input type="radio" name="booktype" value="graphic" required>
                  Detective<input type="radio" name="booktype" value="detective" required>
                  Mystery<input type="radio" name="booktype" value="mystery" required>
                  Historical<input type="radio" name="booktype" value="historical" required>
                  Horror<input type="radio" name="booktype" value="horror" required>
                  Litrery<input type="radio" name="booktype" value="litrery" required><br><br>
        <input type="SUBMIT" name="submit" value="SUBMIT">
    </form>
</body>
</html>
