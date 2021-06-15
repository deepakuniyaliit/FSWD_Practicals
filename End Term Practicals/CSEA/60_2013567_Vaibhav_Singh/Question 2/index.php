<?php
include('config.php');
?>


<?php

if (isset($_POST['bookName'])) {
    $bookname = $_POST['bookName'];
} else {
    $bookname = '';
}
if (isset($_POST['authorName'])) {
    $authorName = $_POST['authorName'];
} else {
    $authorName = '';
}
if (isset($_POST['isbnNumber'])) {
    $ISBN = $_POST['isbnNumber'];
} else {
    $ISBN = '';
}
if (isset($_POST['publisherName'])) {
    $Publisher = $_POST['publisherName'];
} else {
    $Publisher = '';
}
if (isset($_POST['pyear'])) {
    $Year = $_POST['pyear'];
} else {
    $Year = '';
}
if (isset($_POST['noOfPages'])) {
    $Pages = $_POST['noOfPages'];
} else {
    $Pages = '';
}
if (isset($_POST['btype'])) {
    $Type = $_POST['btype'];
} else {
    $Type = '';
}

$output = "SELECT `id`,`bookName`, `authorName`, `isbnNumber`, `publisherName`, `publicationYear`, `bookType`, `noOfPages` FROM `books`";
$result = mysqli_query($db, $output);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display</title>
</head>
<body>
    <div>
        <table>
            <tr>
                <td>BookID</td>
                <td>BookName</td>
                <td>AuthorName</td>
                <td>ISBN</td>
                <td>Publisher</td>
                <td>Publication Year</td>
                <td>Pages</td>
                <td>Book Type</td>
            </tr>
            <tbody>
                <?php
                    while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['bookName']?></td>
                    <td><?php echo $row['authorNumber']?></td>
                    <td><?php echo $row['isbnNumber']?></td>
                    <td><?php echo $row['publisherName']?></td>
                    <td><?php echo $row['pyear']?></td>
                    <td><?php echo $row['noOfPages']?></td>
                    <td><?php echo $row['btype']?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>