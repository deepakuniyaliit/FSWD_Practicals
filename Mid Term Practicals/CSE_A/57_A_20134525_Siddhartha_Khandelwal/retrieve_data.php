<?php 
    include('configuration.php');
?>
<?php
     $sql = "SELECT * FROM `users`";
     $result = mysqli_query($conn, $sql);
    if($result->num_rows == 0){
        echo "Empty Database";
    }
?>
<html>
    <head>
        <title>user data</title>
    </head>
<body>
<?php while($row = $result->fetch_assoc()){?>
    <br>Details of user with ID=<?php echo $row['id'] ?><br>
    Username -<?php echo $row['username'] ?><br>
    Email -<?php echo $row['email'] ?><br>
    Contact -<?php echo $row['contact'] ?><br>
    Gender -<?php echo $row['gender'] ?><br>
    City -<?php echo $row['city'] ?><br>
<?php }?>
</body>
</html>