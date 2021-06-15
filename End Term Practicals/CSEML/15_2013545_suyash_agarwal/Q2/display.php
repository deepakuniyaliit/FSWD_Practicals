<?php 
    include('config.php');
?>
<?php
     $sql = "SELECT * FROM `bookDetails`";
     $result = mysqli_query($conn, $sql);
    if($result->num_rows == 0){
        echo "Empty Database";
    }
?>
<html>
    <head>
        <title>Book Details</title>
    </head>
    <body>
        <?php if($result->num_rows > 0){ ?>
            <table border=1px>
                <thead>
                    <tr>
                        <th>BookName</th>
                        <th>AuthorName</th>
                        <th>isbnNumber</th>
                        <th>pubname</th>
                        <th>pubYear</th>
                        <th>noOfPages</th>
                        <th>bookType</th>
                    </tr>
                <thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $row['BookName'] ?></td>
                            <td><?php echo $row['AuthorName'] ?></td>
                            <td><?php echo $row['isbnNumber'] ?></td>
                            <td><?php echo $row['pubname'] ?></td>
                            <td><?php echo $row['pubYear'] ?></td> 
                            <td><?php echo $row['noOfPages'] ?></td> 
                            <td><?php echo $row['bookType'] ?></td>    
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </body>
</html>