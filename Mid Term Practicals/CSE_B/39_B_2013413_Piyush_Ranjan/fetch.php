<?php
include_once('configuration.php');
?>
<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows > 0){
?>
        <table border='1px'>
            <thead>
                <tr>
                    <th>UserName</th>
                    <th>E-Mail</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $result->fetch_array()){
                ?>
                        <tr>
                            <td><?php echo $row[1]?></td>
                            <td><?php echo $row[2]?></td>
                            <td><?php echo $row[3]?></td>
                            <td><?php echo $row[4]?></td>
                            <td><?php echo $row[5]?></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
<?php
    }
    else{
        echo "no data";
    }
?>
<html>
    <title>
        User Details
    </title>
    <body></body>
</html>