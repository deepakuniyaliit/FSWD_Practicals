<?php
include 'config.php';
?>

<?php
if(isset($_POST['submit']))
{
    $bookname = $_POST['bookname'];
    $authorname = $_POST['authorname'];
    $isbn = $_POST['isbn'];
    $publisher = $_POST['publisher'];
    $year= $_POST['year'];
    $booktype= $_POST['booktype'];
    $pages= $_POST['pages'];

    $sql = "INSERT INTO table1 (bookName, authorName, isbnNumber, publisherName, publicationYear, noOfPages, bookType) VALUES ('$bookname', '$authorname', '$isbn', '$publisher', '$year', '$pages', '$booktype')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="post" action="input.php">
        BOOK NAME:<input type="text" name="bookname" placeholder="Enter your BOOK name" required><br><br>
        AUTHOR NAME:<input type="text" name="authorname" placeholder="Enter Author name" required><br><br>
        ISBN NUMBER:<input type="text" name="isbn" placeholder="Enter isbn number " required><br>
        <br>
        PUBLISHER:<input type="text" name="publisher" placeholder="Enter publisher name" required><br>
        <br>
        PUBLICATION YEAR:
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
                  <br><br>
        BOOK TYPE: 
        Action<input type="radio" name="booktype" value="Action">
        Adventure<input type="radio" name="booktype" value="Adventure">
        Classics<input type="radio" name="booktype" value="Classics">
        Comic Book<input type="radio" name="booktype" value="Comic Book">
        Graphic Novel<input type="radio" name="booktype" value="Graphic Novel">
        Detective<input type="radio" name="booktype" value="Detective">
        Mystery<input type="radio" name="booktype" value="Mystery">
        Historical Fiction<input type="radio" name="booktype" value="Historical Fiction">
        Horror<input type="radio" name="booktype" value="Horror">
        Literary Fiction<input type="radio" name="booktype" value="Literary Fiction">
<br><br>
        NUMBER OF PAGES:<input type="number" name="pages" placeholder="Enter Number of pages" min="200" max="400" required><br><br>
        <input type="submit" name="submit" value="submit" >

    </form>
</body>
</html>