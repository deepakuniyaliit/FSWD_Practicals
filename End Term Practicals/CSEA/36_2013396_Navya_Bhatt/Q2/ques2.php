<?php
include('connection.php');
?>

<!-- Code to fetch data -->
<?php

    $sql="SELECT * FROM `books`";
    $result=mysqli_query($conn, $sql);

    if($result!==false && $result->num_rows > 0){
    ?>

    <table border="1px">
        <thead>
            <tr>
                <th>BOOK ID</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Publisher Name</th>
                <th>Publiction Year</th>
                <th>Pages</th>
                <th>Book Type</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while($row = $result->fetch_array()){?>
            <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[4]?></td>
                <td><?php echo $row[5]?></td>
                <td><?php echo $row[6]?></td>
                <td><?php echo $row[7]?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php  }
?>

<html>
<head>  
    <title>User Details</title>
</head>
<body>
    
</body>
</html>
