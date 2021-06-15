<?php
include('config.php');
?>
<?php
$result=mysqli_query($conn,"SELECT * FROM bookstore");
if($result->num_rows >0){?>
    <table border="1px">
        <thead>
            <tr>
                <th>Book ID</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Publisher</th>
                <th>Publication Year</th>
                <th>Pages</th>
                <th>Book Type</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row=$result->fetch_assoc()){?>
            <tr>
                <td><?php echo $row['bookid']?></td>
                <td><?php echo $row['bookName']?></td>
                <td><?php echo $row['authorName']?></td>
                <td><?php echo $row['isbnNumber']?></td>
                <td><?php echo $row['publisherName']?></td>
                <td><?php echo $row['publicationYear']?></td>
                <td><?php echo $row['noOfPages']?></td>
                <td><?php echo $row['bookType']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
}
?>