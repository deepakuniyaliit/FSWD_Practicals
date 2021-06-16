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

$output = "SELECT `BookName`,`authorName`,`ISBN`,`Publisher`,`Year`,`Pages`,`Type` FROM `books`";
$result = mysqli_query($connection, $output);
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
        <table>
            <tr>
                <td>BookName</td>
                <td>AuthorName</td>
                <td>ISBN</td>
                <td>Publisher</td>
                <td>Year</td>
                <td>Ages</td>
                <td>Type</td>
            </tr>
            <tbody>
                <?php
                    while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['BookName']?></td>
                    <td><?php echo $row['authorNmae']?></td>
                    <td><?php echo $row['ISBN']?></td>
                    <td><?php echo $row['Publisher']?></td>
                    <td><?php echo $row['Year']?></td>
                    <td><?php echo $row['Pages']?></td>
                    <td><?php echo $row['Type']?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>