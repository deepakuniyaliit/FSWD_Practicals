<?php
include('conn.php');
?>
<?php
$output = "SELECT `id`,`username`,`email`,`gender`,`city` FROM `users`";
$result = mysqli_query($conn, $output);
?>
<table>
  <thead>
  <tr>
     <th>ID</th>
     <th>NAME</th>
     <th>email</th>
     <th>Gender</th>
     <th>city</th>
  </tr>
  </thead>
  <tbody>
    <?php
    while($row =$result->fetch_assoc()){ ?>
    <tr>
    <td><?php echo $row['id'] ?> </td>
    <td><?php echo $row['username'] ?> </td>
    <td><?php echo $row['email'] ?> </td>      
    <td><?php echo $row['gender'] ?> </td>
    <td><?php echo $row['city'] ?> </td>

    </tr>
    <?php } ?>
  </tbody>
</table>