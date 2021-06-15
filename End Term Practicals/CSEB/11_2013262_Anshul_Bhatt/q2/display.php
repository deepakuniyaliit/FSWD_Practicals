
<!DOCTYPE html>
<html>
<head>
<title>Details_Users</title>
</head>
<body>
<?php
include('config.php');
?>

<?php
$sql=" SELECT * FROM `users` ";
$result=mysqli_query($conn,$sql);

if ( $result->num_rows > 0) {
?>
<table  border= 1px>
<thead>
<tr>
<th>bookid</th>
<th>bookname</th>
<th>author</th>
<th>isbn</th>
<th>publisher</th>
<th>publicationYear</th>
<th>Pages</th>
<th>booktype</th>
</tr>
</thead>
<tbody>

<?php
while(
$row=$result->fetch_assoc() ){?>
    <tr>
    <td><?php echo $row['id']?></td>        
<td><?php echo $row['bookname']?></td>
<td><?php echo $row['authorname']?></td>
<td><?php echo $row['isbnnumber']?></td>
<td><?php echo $row['publishername']?></td>
<td><?php echo $row['publicationYear']?></td>
<td><?php echo $row['noofpages']?></td>
<td><?php echo $row['booktype']?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } 
else{ echo "The database is empty!";
}?>
</body>
</html>



