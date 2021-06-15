<?php
include('config.php')
?>

<?php

if(isset($_POST['submit'])){

    $bName = $_POST['bookname'];
    $aName = $_POST['authorname'];
    $isbnNumber = $_POST['isbnumber'];
    $pName = $_POST['publishername'];
    $pYear = $_POST['publicationyear'];
    $bType = $_POST['booktype'];
    $pages = $_POST['pages'];

    $sql = "INSERT INTO `books` (`bookName`, `authorName`, `isbnNumber`, `publisherName`, `publicationYear`, `noOfPages`, `bookType`) VALUES ('$bName', '$aName', '$isbnNumber', '$pName', '$pYear', '$pages' , '$bType')";    
    if(!mysqli_query($conn, $sql)){
        echo "Error1 ". mysqli_error($conn);
    }
    else{
        echo "Data sent successfully....1";
    }
}
else{
    echo "please enter the details";
}

?>

<!DOCTYPE html>
<head>
    <title> Book Details</title> 
</head>
<html>
  <body>
        <form method="POST" action="form.php">
            Book Name <input type="text" placeholder="Enter Book Name" name="bookname"><br><br>
            Author Name <input type="text" placeholder="Enter Author Name" name="authorname"><br><br>
            ISBN Number <input type="text" placeholder="Enter ISBN Number" name="isbnumber"><br><br>
            Publisher Name <input type="text" placeholder="Enter Publisher Name" name="publishername"><br><br>
            <br>Publication Year<br>
            <select name="publicationyear">
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
            <br> Book Type <br>
            Action <input type="radio" value="Action" name="booktype"><br>
            Adventure <input type="radio" value="Adventure" name="booktype"><br>
            Classics <input type="radio" value="Classics" name="booktype"><br>
            Comic Book <input type="radio" value="Comic_Book" name="booktype"><br>
            Graphic Novel <input type="radio" value="Graphic_Novel" name="booktype"><br>
            Detective <input type="radio" value="Detective" name="booktype"><br>
            Mystery <input type="radio" value="Mystery" name="booktype"><br>
            Historical Fiction <input type="radio" value="Historical_Fiction" name="booktype"><br>
            Horror <input type="radio" value="Horror" name="booktype"><br>
            Literary Fiction <input type="radio" value="Literary_Fiction" name="booktype"><br>
            <br>
            Number Of Pages<br>
            <input type="range" name="pages" min="200" max="400"> <br><br>
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>