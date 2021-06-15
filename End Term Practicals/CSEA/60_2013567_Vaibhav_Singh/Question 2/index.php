<?php
include('config.php');
?>

<?php

$output = "SELECT * FROM `books`";
$result = mysqli_query($db, $output);
if ($result == false) {
    echo 'Invalid Select Query';
} else if ($result->num_rows == 0) {
    echo 'Database is currently empty';
}
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
                    <td><?php echo $row['authorName']?></td>
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