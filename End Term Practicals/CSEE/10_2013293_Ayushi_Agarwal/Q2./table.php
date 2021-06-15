<?php
include('config.php');
?>

<!-- Code to fetch data -->
<?php

    $sql="SELECT * FROM users";
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
                <th>Publisher</th>
                <th>Publiction Year</th>
                <th>Pages</th>
                <th>Book Type</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $id=0;
            while($row = $result->fetch_array()){
              $id = $id + 1;
            ?>
            <tr>
                <td><?php echo $id?></td>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[4]?></td>
                <td><?php echo $row[6]?></td>
                <td><?php echo $row[5]?></td>
                

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
<style type="text/css">
        table{
                width: 50%;
                
        }
        table,th{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
        }
       
        </style>
<body>
    
</body>
</html>


