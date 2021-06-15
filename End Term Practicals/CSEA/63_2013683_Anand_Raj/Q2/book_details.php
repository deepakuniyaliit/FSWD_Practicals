<?php
include('config.php');
?>


<?php
    $sql = "SELECT * FROM `books`";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows > 0)
    {
    ?>
        <table border = "1px">
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
               // while($row = $result->fetch_array())
               while($row = $result->fetch_assoc())
                {?>
                    <tr>
                        <td><?php echo $row['Book id']?></td>  
                        <td><?php echo $row['Book Name']?></td>  
                        <td><?php echo $row['Author']?></td>  
                        <td><?php echo $row['ISBN']?></td>  
                        <td><?php echo $row['Publisher']?></td>
                        <td><?php echo $row['Publication Year']?></td>
                        <td><?php echo $row['Pages']?></td>
                        <td><?php echo $row['Book Type']?></td>
                    
                    </tr>
               <?php }  ?>            
            </tbody>
            </thead>
        </table>

 <?php   }
?>