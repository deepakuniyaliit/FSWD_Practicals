<?php include('./dbConnect.php') ?>

<?php
if (isset($_POST['submit'])) {

    $bookName = $_POST['bookName'];
    $authorName = $_POST['authorName'];
    $isbnNumber = $_POST['isbnNumber'];
    $publisherName = $_POST['publisherName'];
    $publicationYear = $_POST['publicationYear'];
    $noOfPages = $_POST['noOfPages'];
    $bookType = $_POST['bookType'];


    $query = "INSERT INTO users(bookName, authorName, isbnNumber, publisherName, publicationYear, noOfPages, bookType) ";
    $query .= "VALUES ('$bookName', ' $authorName','$isbnNumber','$publisherName','$publisherName','$noOfPages','$bookType',)";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>HTML Form</title>
    <style>
        div {
            width: 400px;
            height: auto;
            padding: 10px;
            margin-left: 35%;
            margin-right: 30%;
            border: 5px solid red;
            float: center;
        }
    </style>
</head>

<body>
    <div>
        <form method="POST" action="index.php">
            bookName <input type="text" name="bookName" placeholder="Enter Book Name" required><br><br>
            authorName<input type="text" name="authorName" placeholder="Enter Author Name" required><br><br>
            isbnNumber <input type="text" name="isbnNumber" placeholder="Enter ISBN" required><br><br>
            publisherName <input type="text" name="publisherName" placeholder="Enter PublisherName" required><br><br>
            noOfPages<input type="text" name="noOfPages" placeholder="Enter No of pages" required><br><br>

            Select bookType - <br>
            Action <input type="radio" name="bookType" value="Action" checked><br>
            Adventure <input type="radio" name="bookType" value="Adventure"> <br>
            Classics <input type="radio" name="bookType" value="Classics"><br>
            Comic <input type="radio" name="bookType" value="Comic"><br>
            Book <input type="radio" name="bookType" value="Book"><br>
            Graphic Novel <input type="radio" name="bookType" value="Graphic Novel"><br>
            Detective <input type="radio" name="bookType" value="Detective"><br>
            Mystery <input type="radio" name="bookType" value="Mystery"><br>
            Historical Fiction <input type="radio" name="bookType" value="Historical Fiction"><br>
            Horror<input type="radio" name="bookType" value="Horror"><br>
            Literary Fiction<input type="radio" name="bookType" value="Literary Fiction">

            <br><br>

            publicationYear - <select name="publicationYear">
                <option  value="" selected></option>
                <option  value="2010" selected>2010</option>
                <option  value="2011" selected>2011</option>
                <option  value="2012" selected>2012</option>
                <option  value="2013" selected>2013</option>
                <option  value="2014" selected>2014</option>
                <option  value="2015" selected>2015</option>
                <option  value="2016" selected>2016</option>
                <option  value="2017" selected>2017</option>
                <option  value="2018" selected>2018</option>
                <option  value="2019" selected>2019</option>
                <option  value="2020" selected>2020</option>
                <option  value="2021" selected>2021</option>
            </select>
            <br><br>


            <input type="submit" name="submit">
        </form>
    </div>
</body>

</html>