<?php
include('config.php');
?>

<?php
$sql="SELECT * FROM `bookdetail`";
$result = mysqli_query($conn,$sql);
if( $result->num_rows > 0){
?>

<table border="1px">
<thead> 

<tr >
<td>Book Id</td>
<td>Book Name</td>
<td>Author</td>
<td>ISBN</td>
<td>Publisher</td>
<td>Publication Year</td>
<td>Pages</td>
<td>Book Type</td>
</tr>
</thead>
<tbody>

<?php
while($row=$result->fetch_assoc()){ ?>
<tr>
    <td><?php echo $row['bookId']?></td>
    <td><?php echo $row['bookname']?></td>
    <td><?php echo $row['authorname']?></td>
    <td><?php echo $row['bnnumber']?></td>
    <td><?php echo $row['publishername']?></td>
    <td><?php echo $row['publicationyear']?></td>
    <td><?php echo $row['noofpages']?></td>
    <td><?php echo $row['booktype']?></td>

    
</tr>
<?php } ?>
</tbody>
</table>
<?php } ?>






