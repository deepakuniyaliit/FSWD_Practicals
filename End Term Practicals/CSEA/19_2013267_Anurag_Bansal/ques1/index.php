<?php
include('connection.php');
?>


<?php

if (isset($_POST['BookName'])) {
    $bookname = $_POST['BookName'];
} else {
    $bookname = '';
}
if (isset($_POST['authorName'])) {
    $authorName = $_POST['authorName'];
} else {
    $authorName = '';
}
if (isset($_POST['ISBN'])) {
    $ISBN = $_POST['ISBN'];
} else {
    $ISBN = '';
}
if (isset($_POST['Publisher'])) {
    $Publisher = $_POST['Publisher'];
} else {
    $Publisher = '';
}
if (isset($_POST['Year'])) {
    $Year = $_POST['Year'];
} else {
    $Year = '';
}
if (isset($_POST['Pages'])) {
    $Pages = $_POST['Pages'];
} else {
    $Pages = '';
}
if (isset($_POST['Type'])) {
    $Type = $_POST['Type'];
} else {
    $Type = '';
}

// echo $username.$email.$gender.$city;
$sql = "INSERT INTO `books`(`BookName`, `authorName`, `ISBN`, `Publisher`,`Year`,`Pages`,`Type`) VALUES ('$bookname','$authorName','$ISBN','$Publisher','$Year','$Pages','$Type')";
$res = mysqli_query($connection, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="enter">BookName <br></div>
            <div class="enter">authorName <br></div>
            <div class="enter">isbnNumber <br></div>
            <div class="enter4">PublisherName <br></div>
            <div class="enter4">publicationYear <br></div>
            <div class="enter4">noOfPages<br></div>
            <div class="enter4">bookType<br></div>
        </div>
        <div class="right">
            <form action="index.php" method="POST">
                <input type="text" name="bookName" placeholder="Enter here" required><br>
                <input type="text" name="author" placeholder="Enter here" required><br>

                <input type="number" name="isbn" placeholder="Enter here">
                <input type="text" name="publisher" id="" placeholder="Enter here">
                <select name="year" id="">
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
                <input type="range" name="pages" id="" max="400" min="200"><br>

                <input type="radio" name="bookType" value="historical">
                <label for="historical">historical</label> <br>
                <input type="radio" name="bookType" value="fiction">
                <label for="fiction">Fiction</label><br>
                <input type="submit" value="Submit" class="btn">
            </form>
        </div>

    </div>
</body>

</html>