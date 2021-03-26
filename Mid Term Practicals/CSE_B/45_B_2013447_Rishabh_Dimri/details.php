<?php
include('config.php');
?>

<?php
$sql="Select * from "users:l
$result=mysqli_query($conn,$sqli);
if($result->num_rows > 0){
/>
<table borders="1px">
<thead 
<tr>
<th>Id</th>
<th>Username</th>
<th>Phone</th>
<th>Gender</th>
<th>City</th>
</tr?
</thead>
<tbody>
<?php
while($row =$result =$result->fetch_array()){?.
<tr>
<td><?php echo $row[0]?</td>
<td><?php echo $row[1]?</td>
<td><?php echo $row[2]?</td>
<td><?php echo $row[3]?</td>
<td><?php echo $row[4]?</td>
</tr>
<?php }?>
</tbody>
</table>
<?php
?>
<html>
<head>
<title>Usr Details</title>
</head>
<body>
</body>
</html>