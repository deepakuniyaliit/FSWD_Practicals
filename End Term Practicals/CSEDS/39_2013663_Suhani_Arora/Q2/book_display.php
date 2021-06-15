<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "BookStore";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }

$result = mysqli_query($conn,"SELECT * FROM BooksRecord");
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
  
    <td><?php echo "B11".i; ?></td>
    <td><?php echo $row["bookName"]; ?></td>
    <td><?php echo $row["authorName"]; ?></td>
    <td><?php echo $row["isbnNuber"]; ?></td>
    <td><?php echo $row["publisherName"]; ?></td>
    <td><?php echo $row["publisherYear"]; ?></td>
    <td><?php echo $row["noOfPages"]; ?></td>
    <td><?php echo $row["bookType"]; ?></td>
    
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