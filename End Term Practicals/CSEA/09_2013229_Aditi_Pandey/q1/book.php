<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $bname = $_POST['bname'];
    $aname = $_POST['aname'];
    $isbn=$_POST['isbn'];
    $publisher = $_POST['pname'];
    $pyear = $_POST['pyear'];
    $pages= $_POST['pages'];
    $btype=$_POST['btype'];


    $sql = "INSERT INTO `book details` (`book name`, `author`,`ISBN`,`publisher`,`year`,`pages`,`type`) VALUES ('$bname', '$aname', '$isbn','$publisher','$pyear','$pages','$btype')";
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
    <title>Book</title>
</head>
<body>
    <form action="book.php" method="post">
        bookName <input type="text" name="bname" placeholder="Enter book name" reqired><br>
        authorName <input type="text" name="aname" placeholder="Enter author's name" reqired><br>
        isbnNumber <input type="text" name="isbn" placeholder="Enter book number" reqired>
        publisherName <input type="text" name="pname" placeholder="Enter publisher name" reqired><br>
        publication year:
        <select name="pyear">
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
        </select>
        Numner of pages: <input type="number" name="pages" min="200" max="400">
        Book type: Action <input type="radio" name="btype" value="action">
        Adventure <input type="radio" name="btype" value="adventure">
        Classics <input type="radio" name="btype" value="Classics">
        Graphic Novel <input type="radio" name="btype" value="comic">
        Detective <input type="radio" name="btype" value="Graphic">
        Mystery <input type="radio" name="btype" value="Detective">
        Historical Fiction  <input type="radio" name="btype" value="Historical">
        Horror <input type="radio" name="btype" value="Horror">
        Literary Fiction<input type="radio" name="btype" value="literary">
       <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>