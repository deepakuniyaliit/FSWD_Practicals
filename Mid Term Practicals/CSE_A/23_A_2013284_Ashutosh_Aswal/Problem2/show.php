<?php
include('configuration.php');
$query = "SELECT * FROM `users`";
$result = mysqli_query($db, $query);
if($result == false)
{
    echo "Invalid Select Query!";
}
else if($result->num_rows == 0)
{
    echo "Database is currently empty.";
}
?>

<html>
    <head>
        <title>Database</title>
    </head>
    <body>
        <?php if($result != false && $result->num_rows != 0):?>
            <h2>Users Data-</h2>
            <ol>
                <?php while($row = $result->fetch_assoc()):?>
                    <li> Details of user with ID = <?php echo $row['id']?></li>
                    <ul style='list-style-type:disc'>
                        <li>Username - <?php echo $row['username']?></li>
                        <li>Email - <?php echo $row['email']?></li>
                        <li>Contact - <?php echo $row['contact']?></li>
                        <li>Gender - <?php echo $row['gender']?></li>
                        <li>City - <?php echo $row['city']?></li>
                    </ul>
                <td>
                <?php endwhile;?>
            </ol>
        <?php endif; ?>
    </body>
</html>