<?php
include 'establishishimg connection withdatabase.php';
?>
<?php
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0)
{
?>
 <table  border="1px">
       <thead>
                <tr>
                   <th>user name</th>
                   <th>email </th>
                   <th>contact </th>
                   <th>gender</th>
                   <th>city </th>
                   
                </tr>
      </thead> 
       <tbody>
            <?php
       	      while($row = $result->fetch_assoc())
       	     {?>

              <tr>
                  <td><?php  echo $row['user_name'] ?></td>
                  <td><?php  echo $row['email'] ?></td>
                  <td><?php  echo $row['contact'] ?></td>
                  <td><?php  echo $row['gender'] ?></td>
                  <td><?php  echo $row['city'] ?></td>
             </tr>
             <?php
              }
              ?>
       </tbody>
</table>
<?php
}
?>

<html>
<head>
	<title>User Details</title>
</head>
<body>
      
</body>
</html>