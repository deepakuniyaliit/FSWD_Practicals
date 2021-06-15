<?php
include('config.php');
?>
<?php
if(isset($_POST['submit']))
{
    $bookName=$_POST['bookName'];
    $authorName=$_POST['authorName'];
    $isbnNumber=$_POST['isbnNumber'];
    $publisherName=$_POST['publisherName'];
    $publicationYear=$_POST['publicationYear'];
    $noOfPages=$_POST['noOfPages'];
    $bookType=$_POST['bookType'];
    $sql="INSERT INTO `users` (`id`, `bookName`, `authorName`, `isbnNumber`, `publisherName`, `publicationYear`, `noOfPages`, `bookType`) VALUES (`$bookName`,`$authorName`,`$isbnNumber`,`$publisherName`,`$publicationYear`,`$noOfPages`,`$bookType`) ";
    mysqli_query($conn,$sql);
}
else
{
    echo"Press the click buttons";
}
?>
<html>
    <head>
        <title>HTML FORM</title>
    </head>
    <body>
        <form method="POST" action="form.php">
            BOOK-NAME<input type="text" name="bookName"><br><br>
            AUTHOR-NAME<input type="text" name="authorName"><br> <br>
            ISBN-NUMBER<input type="text" name="isbnNumber"><br> <br>
            PUBLISHER-NAME<input type="text" name="publisherName"><br> <br>
            PUBLICATION-YEAR<select name="publicationYear">
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
                <br><br>
            NUMBER-OF-PAGES<input type="number" name="noOfPages" min="200" max="400"></br><br>
            <input type="radio" name="bookType" value="Action">Action
            <input type="radio" name="bookType" value="Adventure">Adventure
            <input type="radio" name="bookType" value="Classics">Classics
            <input type="radio" name="bookType" value="ComicBook">ComicBook
            <input type="radio" name="bookType" value="GraphicNovel">GraphicNovel
            <input type="radio" name="bookType" value="Detective">Detective
            <input type="radio" name="bookType" value="Mystery">Mystery
            <input type="radio" name="bookType" value="HistoricalFiction">HistoricalFiction
            <input type="radio" name="bookType" value="Horror">Horror
            <input type="radio" name="bookType" value="LiteraryFiction">LiteraryFiction
            <input type="radio" name="bookType" value="Action">Action
            <br/><br/>
            <input type="submit" name="submit" value="CLICK">
        </form>
    </body>
</html>