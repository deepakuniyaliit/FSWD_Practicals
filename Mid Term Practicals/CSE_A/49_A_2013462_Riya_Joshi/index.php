<?php include("configuration.php"); ?>
<!DOCTYPE html>
<html >
<head>
    
</head>
    <body>
        <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn,$sql);
        ?>
        <ol type="A">
            <?php
        if((mysqli_num_rows($result)>0)){ ?> 
                            <?php while(($row = mysqli_fetch_assoc($result))){?>
                            <li>UserName- <?php echo $row["UserName"]?></li>
                            <ul>
                                <li><?php echo $row["Email"]?></li>
                                <li><?php echo $row["Contact"]?></li>
                                <li><?php echo $row["Gender"]?></li>
                                <li><?php echo $row["City"]?></li>
                            </ul>
                         
                    <?php } ?>
            <?php } else{
                echo "No data found";
            }
            ?>
            </ol>
    </body>
</html>