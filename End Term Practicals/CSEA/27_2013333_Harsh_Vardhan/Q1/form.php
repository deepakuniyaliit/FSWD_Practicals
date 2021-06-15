<?php
session_start();
$con = mysqli_connect('localhost', 'root', '1234');
if ($con) {
    echo "Connection Successful...";
} else {
    echo "Connection failed..." + mysqli_connect_error();
}
mysqli_select_db($con, 'bookstore');

if (isset($_POST['submitbtn'])) {
    $bname = $_POST['bookName'];
    $aname = $_POST['authorName'];
    $isbn = $_POST['isbnNumber'];
    $pbname = $_POST['publisherName'];
    $numpages = $_POST['numPages'];
    $pbyear = $_POST['publicationYear'];
    $btype = $_POST['bookType'];

    $query = "insert into usertable(bookName,authorName,isbnNumber,publisherName,publicationYear,noOfPages,bookType) values ('$bname','$aname','$isbn','$pbname','$pbyear','$numpages','$btype')";
    mysqli_query($con, $query);
}


?>
<html>
<form method="POST" action="form.php">
    <input type="text" name="bookName" id="" placeholder="Enter book name">
    <br>
    <input type="text" name="authorName" placeholder="Enter author name">
    <br>
    <input type="text" name="isbnNumber" placeholder="Enter isbn number">
    <br>
    <input type="text" name="publisherName" placeholder="Enter publisher name">
    <br>
    <input type="text" name="numPages" id="" placeholder="Enter number of pages">
    <br>
    <label for="pbyear">Publication year</label>
    <select name="publicationYear" id="">
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
    <br>
    Action<input type="radio" name="bookType" value="Action">
    Adventure<input type="radio" name="bookType" value="Adventure">
    Classics<input type="radio" name="bookType" value="Classics">
    Comic<input type="radio" name="bookType" value="Comic">
    Graphic Novel<input type="radio" name="bookType" value="Graphic Novel">
    Detective<input type="radio" name="bookType" value="Detective">
    Mystery<input type="radio" name="bookType" value="Mystery">
    Historical Fiction<input type="radio" name="bookType" value="Historical fiction">
    Horror<input type="radio" name="bookType" value="Horror">
    Literary Fiction<input type="radio" name="bookType" value="Literary Fiction">
    <br>
    <input type="submit" name="submitbtn">


</form>

</html>