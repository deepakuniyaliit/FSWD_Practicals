<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Q1: Book entry form</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bookName = $_POST["book"];
        $authorName = $_POST["author"];
        $isbnNo = $_POST["isbn"];
        $publisherName = $_POST["pn"];
        $publicationYear = $_POST["py"];
        $noOfPages = $_POST["pages"];
        $bookType = $_POST["btype"];
    }

    $user = 'root';
    $password = '';
    $db = 'bookstore';

    $connection =  mysqli_connect('localhost', $user, $password, $db) or
        die("Connection failed: " . mysqli_connect_error());
//table rec in db bookstore
    echo "Connection succesful";
    $query = "INSERT INTO rec (bookname, authorname, isbnno, publishername, publicationyear, noofpages, booktype) VALUES ($bookName, $authorName, $isbnNo, $publisherName, $publicationYear, $noOfPages, $bookType)";

    if (mysqli_query($connection, $query)) {
        echo "Succesful record creation";
    } else {
        echo "error";
        echo $query . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
    ?>
    <h1>Book Form</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Book Name: <input type="text" name="book" required><br>
        Author name: <input type="text" name="author" required><br>
        Isbn number: <input type="text" name="isbn" required><br>
        Publisher name: <input type="text" name="pn" required><br>
        Publication year:
        <select name="py" id="puby">
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
        No. of pages: <input type="number" min=200 max=400 name="pages" required>
        Book Type:<br>
        <input type="radio" name="btype" value="Action">Action<br>
        <input type="radio" name="btype" value="Adventure">Adventure<br>
        <input type="radio" name="btype" value="Classics">Classics<br>
        <input type="radio" name="btype" value="Comic Book">Comic Book<br>
        <input type="radio" name="btype" value="Graphic Novel">Graphic Novel<br>
        <input type="radio" name="btype" value="Detective">Detective<br>
        <input type="radio" name="btype" value="Historical Fiction">Historical Fiction<br>
        <input type="radio" name="btype" value="Horror">Horror<br>
        <input type="radio" name="btype" value="Literary Fiction">Literary Fiction<br>


        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>