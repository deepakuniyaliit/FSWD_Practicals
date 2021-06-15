<?php
include('config.php')
?>

<?php
    $sql = "select * from `books`";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
?>
        <table border="1px">
            <tr>
                <th>BOOK ID</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Publisher</th>
                <th>Publiction Year</th>
                <th>Pages</th>
                <th>Book Type</th>

            </tr>
<?php
                while($row = $result->fetch_assoc()){
?>
                <tr>
                  <th><?php echo $row['id'] ?></th>
                  <th><?php echo $row['bookName'] ?></th>
                  <th><?php echo $row['authorName'] ?></th>
                  <th><?php echo $row['isbnNumber'] ?></th>
                  <th><?php echo $row['publisherName'] ?></th>
                  <th><?php echo $row['publicationYear'] ?></th>
                  <th><?php echo $row['noOfPages'] ?></th>
                  <th><?php echo $row['bookType'] ?></th>
                </tr>
<?php
    }
?>
        </table>
<?php
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Display</title>
</head>
<body>

</body>
</html>