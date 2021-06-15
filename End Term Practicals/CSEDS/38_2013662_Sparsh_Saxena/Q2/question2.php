<?php
include('q2con.php');
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <th>
    <td>Book ID</td>
    <td>Book Name</td>
    <td>Author</td>
    <td>ISBN</td>
    <td>Publisher</td>
    <td>Publication Year</td>
    <td>Pages</td>
    <td>Book Type</td>
    
  </th>
<?php

$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
  
    <td><?php echo "B10".i; ?></td>
    <td><?php echo $row["BookName"]; ?></td>
    <td><?php echo $row["AuthorName"]; ?></td>
    <td><?php echo $row["ISBN"]; ?></td>
    <td><?php echo $row["PublisherName"]; ?></td>
    <td><?php echo $row["Year"]; ?></td>
    <td><?php echo $row["NumPages"]; ?></td>
    <td><?php echo $row["Booktype"]; ?></td>
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
