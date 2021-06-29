<?php
include('Display.php')
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
                  <th><?php echo $row['Id'] ?></th>
                  <th><?php echo $row['BookName'] ?></th>
                  <th><?php echo $row['Author'] ?></th>
                  <th><?php echo $row['ISBN'] ?></th>
                  <th><?php echo $row['Publisher'] ?></th>
                  <th><?php echo $row['PublicationYear'] ?></th>
                  <th><?php echo $row['Pages'] ?></th>
                  <th><?php echo $row['BookType'] ?></th>
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