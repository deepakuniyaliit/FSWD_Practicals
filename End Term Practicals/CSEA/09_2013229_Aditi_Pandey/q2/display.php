<?php
include('config.php');
?>
<?php
$sql="SELECT * FROM `book details`";
$result = mysqli_query($conn, $sql);
if($result->num_rows){ 
    ?>
    <table border="1px">
        <thead>
            <tr>
                 <th>book ID</th>
                 <th>Book Name</th>
                 <th>Author</th>
                 <th>ISBN</th>
                 <th>Publisher</th>
                 <th>Publication year</th>
                 <th>Pages</th>
                 <th>Book Type</th>
             </tr>
        </thead>
        <tbody>
            <?php
            while($row=$result->fetch_assoc()){?>
            <tr>
                  <td><?php echo $row['book id']?></td>
                  <td><?php echo $row['book name']?></td>
                  <td><?php echo $row['author']?></td>
                  <td><?php echo $row['ISBN']?></td>
                  <td><?php echo $row['publisher']?></td>
                  <td><?php echo $row['year']?></td>
                  <td><?php echo $row['pages']?></td>
                  <td><?php echo $row['type']?></td>
            </tr>
          <?php  } ?>
              
        </tbody>
    </table>
<?php  }
?>
<html>
    <head>
      <title>bookdetails</title>
    </head>
    <body>
        
    </body>
</html>