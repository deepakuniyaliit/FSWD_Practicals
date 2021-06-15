<?php
include_once 'index.php';
$result = mysqli_query($conn,"SELECT * FROM crud");
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
  
  <tr>
    <td>Book ID</td>
    <td>Book Name/td>
    <td>Author</td>
    <td>ISBN</td>
    <td>Publisher</td>
    <td>Publication Year</td>
    <td>Pages</td>
    <td>Book Type</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Book_ID"]; ?></td>
    <td><?php echo $row["Book_Name"]; ?></td>
    <td><?php echo $row["Author"]; ?></td>
    <td><?php echo $row["ISBN"]; ?></td>
    <td><?php echo $row["Publisher"]; ?></td>
    <td><?php echo $row["Publication_year"]; ?></td>
    <td><?php echo $row["Pages"]; ?></td>
    <td><?php echo $row["Book_Type"]; ?></td>
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