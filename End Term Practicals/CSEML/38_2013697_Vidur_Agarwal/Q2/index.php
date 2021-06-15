<?php
session_start();
$con = mysqli_connect('localhost', 'root', '1234');
if ($con) {
    echo "Connection Successful...";
} else {
    echo "Connection failed..." + mysqli_connect_error();
}
mysqli_select_db($con, 'bookstore');
?>


<?php
$sql = "SELECT * FROM `usertable`";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    ?>

<table border="1px">
    <thead>
        <tr>
            <th>BookID</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Publisher</th>
            <th>Publication Year</th>
            <th>Pages</th>
            <th>Book Types</th>



        </tr>
    </thead>
    <tbody>

        <?php
                // while($row = $result->fetch_array())
                while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['bookId'] ?></td>
            <td><?php echo $row['bookName'] ?></td>
            <td><?php echo $row['authorName'] ?></td>
            <td><?php echo $row['isbnNumber'] ?></td>
            <td><?php echo $row['publisherName'] ?></td>
            <td><?php echo $row['publicationYear'] ?></td>
            <td><?php echo $row['noOfPages'] ?></td>
            <td><?php echo $row['bookType'] ?></td>



        </tr>
        <?php } ?>
    </tbody>
</table>
<?php    }
?>