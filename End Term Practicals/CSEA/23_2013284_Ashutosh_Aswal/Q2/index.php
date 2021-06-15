<?php
include('configuration.php');
$query = "SELECT * FROM `books`";
$result = mysqli_query($db_handle, $query);
if ($result == false) {
    echo 'Invalid Select Query';
} else if ($result->num_rows == 0) {
    echo 'Database is currently empty';
}
?>

<html>

<head>
    <title>DATABASE</title>
    <link rel='stylesheet' href='CSS/style.css' />
</head>

<body>
    <?php if ($result != false && $result->num_rows != 0) : ?>
        <table class="bordered-table centered-table">
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
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['bookId']; ?></td>
                        <td><?php echo $row['bookName']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td><?php echo $row['isbn']; ?></td>
                        <td><?php echo $row['publisher']; ?></td>
                        <td><?php echo $row['publicationYear']; ?></td>
                        <td><?php echo $row['pages']; ?></td>
                        <td><?php echo $row['bookType']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>

</html>