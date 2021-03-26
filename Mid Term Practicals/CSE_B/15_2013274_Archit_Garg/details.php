<?php
include 'configuration.php';
?>

<?php
$sql= "SELECT * FROM users";
$result=mysqli_query($conn,$sql);

?>

<html>
    <head>
        <title>Details</title>
    </head>
<body>
    <div>
        <?php
    $var= 'A';
        while($row=mysqli_fetch_array($result)){
    ?>
        <b><?php echo $var++?><?php echo". Details of user with id - "?> <?php echo $row['id']?></b>
        <ul>
            <?php if($row['username']!='NA'){?><li> <?php echo "Username:"?><?php echo $row['username']?> <?php } ?> </li>
            <?php if($row['email']!='NA'){?><li> <?php echo "email:"?><?php echo $row['email']?> <?php } ?> </li>
            <?php if($row['contact']!='NA'){?><li> <?php echo "contact:"?><?php echo $row['contact']?> <?php } ?> </li>
            <?php if($row['gender']!='NA'){?><li> <?php echo "gender:"?><?php echo $row['gender']?> <?php } ?> </li>
            <?php if($row['city']!='NA'){?><li> <?php echo "city:"?><?php echo $row['city']?> <?php } ?> </li>
        </ul>
        <?php } ?>
    </div>

</form>
</body>
</html>
