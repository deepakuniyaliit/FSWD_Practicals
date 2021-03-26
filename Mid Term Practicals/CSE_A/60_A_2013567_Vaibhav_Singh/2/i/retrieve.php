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
        <title>Users Table</title>
    </head>
    <body>
        <?php if($result->num_rows > 0){ ?>
        <?php while($row = $result->fetch_assoc()){ ?>
        <h3>Details of User With ID=<?php echo $row['id'] ?></h3>
        <ul>
                            <li>Username: <?php echo $row['username'] ?></li>
                            <li>Email-<?php echo $row['email'] ?></li>
                            <li>Contact<?php echo $row['contact']?></li>
                            <li>Gender-<?php echo $row['gender'] ?></li>
                            <li>City-<?php echo $row['city'] ?></li> 
        </ul>               
    </body>
</html>

                