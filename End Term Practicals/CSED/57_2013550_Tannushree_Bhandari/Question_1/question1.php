<?php
include 'config.php';
if(isset($_POST['submit']))
{
    $bookname = $_POST['bookName'];
    $authorname = $_POST['authorName'];
    $isbn = $_POST['isbnNumber'];
    $publisher = $_POST['publisherName'];
    $year= $_POST['publicationYear'];
    $booktype= $_POST['bookType'];
    $pages= $_POST['noOfPages'];

    $sql = "INSERT INTO table1 (bookName, authorName, isbnNumber, publisherName, publicationYear, noOfPages, bookType) VALUES ('$bookname', '$authorname', '$isbn', '$publisher', '$year', '$pages', '$booktype')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>

<html>
    <head>
        <title>Homepage</title>
    </head>
    <body>
        <form method = "POST" action = "form.php">
        <table cellspacing = "10">
            <tr>
                <td>Book Name</td>
                <td><input type="text" style="width: 210px" name="bookName" required></td>
            </tr>
            <tr>
                <td>Author Name</td>
                <td><input type="text" style="width: 210px " name="auhtorName" required></td>
            </tr>
            <tr>
                <td>ISBN Number</td>
                <td><input type="text" style="width: 210px " name="isbnNumber" required></td>
            </tr>
            <tr>
                <td>Publisher Name</td>
                <td><input type="text" style="width: 210px " name="publisherName" required></td>
            </tr>
            <tr>
                <td>Publication Year</td>
                <td>
                    <select style="width: 210px " name="publicationYear" required>
                    <option>2010</option>
                    <option>2011</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
	                </select>
                </td>
            </tr>
            <tr>
                <td>Number of Pages</td>
                <td><input type="Number" style="width: 210px " name="noOfPages" required></td>
            </tr>
            <tr>
                <td>Book Type</td>
                <td id = "radio">
                    <input type="radio" id="Action" name="bookType" value="Action" required>
                    <label for="Action">Action</label>
                    <input type="radio" id="Adventure" name="bookType" value="Adventure" required>
                    <label for="Adventure">Adventure</label>
                    <input type="radio" id="Classics" name="bookType" value="Classics" required>
                    <label for="Classics">Classics</label>
                    <input type="radio" id="Comic Book" name="bookType" value="Comic Book" required>
                    <label for="Comic Book">Comic Book</label>
                    <input type="radio" id="Graphic Novel" name="bookType" value="Graphic Novel" required>
                    <label for="Graphic Novel">Graphic Novel</label>
                    <input type="radio" id="Detective" name="bookType" value="Detective" required>
                    <label for="Detective">Detective</label>
                    <input type="radio" id="Mystery" name="bookType" value="Mystery" required>
                    <label for="Mystery">Mystery</label>
                    <input type="radio" id="Historical Fiction" name="bookType" value="Historical Fiction" required>
                    <label for="Historical Fiction">Historical Fiction</label>
                    <input type="radio" id="Horror" name="bookType" value="Horror" required>
                    <label for="Horror">Horror/label>
                    <input type="radio" id="Literary Fiction" name="bookType" value="Literary Fiction" required>
                    <label for="Literary Fiction">CLiterary Fiction</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-left: 60px;"><input type="submit"  value="SUBMIT" name="submit"></td>
            </tr>
        </table>
        </form>
        <hr>
    </body>
</html>