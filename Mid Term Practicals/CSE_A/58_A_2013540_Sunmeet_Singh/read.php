<?php
include('config.php');
?>
<?php
 $sql = "SELECT * FROM users";
 $result = mysqli_query($conn,$sql);
 if($result -> num_rows > 0)
 {
  ?>
   while($row = $result->fetch_assoc())
   {
    ?>
    <tr>
    <h1>USERS DATA</h1>
    <p>USERNAME:<?php echo $row['username'] ?> </p>
    <p>EMAIL:<td><?php echo $row['email'] ?></p>
    <p>CONTACT<?php echo $row['contact'] ?></p>
    <p>GENDER<?php echo $row['gender'] ?> </p>
    <city><?php echo $row['city'] ?></p> 
    </tr>
    <?php
   }