<?php
include 'config.php';
?>
<?php
if(isset($_POST['submit']))
{
    $bookname = $_POST['bookname'];
    $authorname = $_POST['author'];
    $isbn = $_POST['isbn'];
    $publisher = $_POST['publisher'];
    $year= $_POST['year'];
    $booktype= $_POST['booktype'];
    $pages= $_POST['pages'];

    $sql = "INSERT INTO book (bookName, authorName, isbnNumber, publisherName, publicationYear, noOfPages, bookType) VALUES ('$bookname', '$authorname', '$isbn', '$publisher', '$year', '$pages', '$booktype')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>
<body>
	
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        BOOK_NAME:<input type="text" name="bookname" placeholder="Enter your Book name" required><br>
        
        AUTHOR_NAME:<input type="text" name="author" placeholder="Enter Authors name" required><br>
        
        ISBN_NUMBER:<input type="text" name="isbn" placeholder="Enter isbn number " required><br>
        <br>
        PUBLISHER_NAME:<input type="text" name="publisher" placeholder="Enter publisher name" required><br>

        <br>
        PUBLICATION_YEAR:
        <select name="year" id="year" required>
                    <option value="">Enter Publication Year</option>
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

        NO_OF_PAGES:<input type="number" name="pages" placeholder="Enter no of pages number" min="200" max="400" required><br>

         BOOK TYPE:<br> 
        <input type="radio" name="booktype" value="action">Action<br>
        <input type="radio" name="booktype" value="adventure">Adventure<br>
        <input type="radio" name="booktype" value="classics">Classics<br>
        <input type="radio" name="booktype" value="comicbook">Comic Book<br>
        <input type="radio" name="booktype" value="graphicnovel">Graphic Novel<br>
        <input type="radio" name="booktype" value="detective">Detective<br>
        <input type="radio" name="booktype" value="mystery">Mystery<br>
        <input type="radio" name="booktype" value="historicalfiction">Historical Fiction<br>
        <input type="radio" name="booktype" value="horror">Horror<br>
        <input type="radio" name="booktype" value="literaryfiction">Literary Fiction
<br><br>

        <input type="submit" name="submit" value="submit" >

    </form>
</body>
</html>