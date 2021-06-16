<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $book = $_POST['book'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $publisher = $_POST['publisher'];
    $pages = $_POST['pages'];
    $booktype = $_POST['booktype'];
    $year = $_POST['year'];
    $sql = "INSERT INTO `BookStore` (`book`,`author`, `isbn`, `publisher`, `pages`, `booktype`, `year`) VALUES ('$book','$author', '$isbn', '$publisher', '$pages','$booktype','$year')";
    mysqli_query($conn, $sql);
}
}
?>
<html>
<head>
    <title>form</title>
</head>
<body>

<form method="POST" action="QUESTION1.php">
BOOKNAME    :<input type="text" name="bookName" placeholder="enter BookName" required><br>
AUTHORNAME    :<input type="text" name="authorName" placeholder="enter AuthorName" required><br>
ISBN NUMBER    :<input type="text" name="isbnNumber" placeholder="Enter isbn Number"><br>
PUBLISHERNAME    :<input type="text" name="publisherName" placeholder="enter PublisherName" required><br>
PUBLICATION YEAR   :
<select id="publicationYear" name="publicationYear">
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
BOOKTYPE    :<input type="text" name="bookType" placeholder="enter BookType" required><br>
No of Pages :<input type="number" name="noOfPages" placeholder="enter pages" min="200" max="400" required ><br>

BOOKTYPE   :   Action<input type="radio" name="booktype" value="action" required>
            Adventure<input type="radio" name="booktype" value="adventure" required>
            Classic<input type="radio" name="booktype" value="classic" required>
            Comic<input type="radio" name="booktype" value="comic" required>
            Graphic<input type="radio" name="booktype" value="graphic" required>
            Detective<input type="radio" name="booktype" value="detective" required>
            Mystery<input type="radio" name="booktype" value="mystery" required>
            Historical<input type="radio" name="booktype" value="historical" required>
            Horror<input type="radio" name="booktype" value="horror" required>
            Litrery<input type="radio" name="booktype" value="litrery" required><br>
         
         

        <br>
		
<input type="submit" name="submit">
</form>
</body>
</html>