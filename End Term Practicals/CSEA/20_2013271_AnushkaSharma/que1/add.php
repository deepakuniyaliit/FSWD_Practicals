<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $bookName = $_POST['bookName'];
    $authorName = $_POST['authorName'];
    $isbnNumber = $_POST['isbnNumber'];
    $year = $_POST['year'];
    $publisherName = $_POST['publisherName'];
    $noOfPages = $_POST['noOfPages'];
    $authorName = $_POST['authorName'];
    $bookType = $_POST['bookType'];

    $sql = "INSERT INTO `books` (`bookName`, `authorName`, `isbnNumber`, `publisherName` ,`publicationYear`,`noOfPages`,`bookType`) VALUES ('$bookName',' $authorName', ' $isbnNumber', ' $year ', '$publisherName','$authorName','$bookType')";
    mysqli_query($conn, $sql);
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="add.php">
    BookName <input type="text" name="bookName" placeholder="Type book name" required><br>
    Authorname <input type="text" name="authorName" placeholder="Type your authorname" required><br>
    IsbnNumber <input type="text" name="isbnNumber" placeholder=" enter isbn number " required><br>
    PublisherName <input type="text" name="publisherName" placeholder="Type book name" required><br>

    Publication Year <select name="year">
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
    No of page <input type="number" name="noOfPages" placeholder="Type book name" max="400" min="200" required><br>
    Booktype:  
     <input type="radio" name="bookType" value="action"> Action
     <input type="radio" name="bookType" value="adventure"> adventure
     <input type="radio" name="bookType" value="classes"> classes<br>
     <input type="radio" name="bookType" value="comic"> comic
     <input type="radio" name="bookType" value="horror"> horror
     <input type="radio" name="bookType" value="literacy"> literacy<br>   
     <input type="radio" name="bookType" value="novel"> novel
     <input type="radio" name="bookType" value="detecctive"> detective
     <input type="radio" name="bookType" value="mystry"> mystery<br>
     <input type="radio" name="bookType" value="history"> history
     <input type="radio" name="bookType" value="fiction"> fiction<br>

    <input type="submit" name="submit" value="Click">
</form>
</body>
</html>
