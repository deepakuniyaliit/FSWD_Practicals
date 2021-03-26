<?php
include('config.php');
?>

<?php
    $sql="SELECT * FROM `users`";
    $result=mysqli_query($conn,$sql);
if($result->num_rows > 0){
?>
<table border='1px'>
<tr>
<th>USERNAME</th>
<th>EMAIL</th>
<th>GENDER</th>
<th>CITY</th></tr>
<?php
while($row=$result->fetch_assoc()){?>
<tr>
<td><?php echo $row['username']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo $row['contact']?></td>
<td><?php echo $row['gender']?></td>
<td><?php echo $row['city']?></td>
</tr>
<?php }?>
</table>
<?php }?>

<html>
<head><title>DEATILS IN TABLE FORM</title>
<style>
table,td{
    border-collapse:collapse;
}
</style>
</head>
</html>