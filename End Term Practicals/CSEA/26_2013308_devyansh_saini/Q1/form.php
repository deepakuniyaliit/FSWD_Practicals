<?php
include('config.php');
?>
<html>
<head>
    <title>form</title>
</head>
<body>

<form method="POST" action="form.php">
bookName    :<input type="text" name="bookName"  required><br>
AuthorName   :<input type="text" name="authorname"  required ><br>
isbnNumber :<input type="text" name="isbnnumber"  required ><br>
publisherName :<input type="text" name="publishername"  required ><br>
publicationYear    :
            <select name="year" >
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
        </select> <br>
noOfPages :<input type="number" name="pages" min="200" max="400" requires><br>
 bookType :   Action<input type="radio" name="bookType" value="Action" >
                Adventure<input type="radio" name="bookType" value="Adventure" >
                Classic<input type="radio" name="bookType" value="Classic" >
                Comic<input type="radio" name="bookType" value="Comic" >
                Book<input type="radio" name="bookType" value="Book" >
                Graphic Novel<input type="radio" name="bookType" value="Graphic Novel" >
                Detective<input type="radio" name="bookType" value="Detective" >
                Mystery<input type="radio" name="bookType" value="Mystery" >
                Historical Fiction<input type="radio" name="bookType" value="Historical Fiction" >
                Horror<input type="radio" name="bookType" value="Horror" >
                Literary Fiction<input type="radio" name="bookType" value="Literary Fiction" ><br>

<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $bookName= $_POST['bookName'];
    $AuthorName  = $_POST['authorname'];
    $isbnNumber = $_POST['isbnnumber'];
    $publisherName= $_POST['publishername'];
    $publicationYear= $_POST['year'];
    $noOfPages= $_POST['pages'];
    $bookType= $_POST['bookType'];
    $sql = "INSERT INTO `BookStore` (`bookName`,`AuthorName`, `isbnNumber`, `publisherName`, `publicationYear`,`noOfPages`,`bookType`) VALUES (`$bookName`,`$AuthorName`, `$isbnNumber`, `$publisherName`, `$publicationYear`,`$noOfPages`,`$bookType`)";
    mysqli_query($conn, $sql);
}
else if(isset($_SESSION['username']) ){
    echo "Please click submit button to submit the data..";
}
?>