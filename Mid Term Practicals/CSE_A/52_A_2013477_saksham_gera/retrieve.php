<?php include("config.php"); ?>

<!DOCTYPE html>

<html>
    <head>
        <style>
            th, td, table {
                border: 1px solid black;
            }

            table {
                width: 75%;
                text-align: center;
                margin: 20px auto;
                padding: auto;
                border-collapse: collapse;
            }
        </style>
    </head>

    <body>
        <?php
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);

            if ((mysqli_num_rows($result) > 0)) { ?>
                  
                <ol>
                    <?php while (($row = mysqli_fetch_assoc($result))) { ?>
                <li><h6> Detail of user with id <?php echo $row["id"] ?></h6>
                            <ul>
                                <li>username: <?php echo $row["username"] ?> </li>
                                <li>Email:<?php echo $row["email"] ?> </li>
                                <li>Contact:<?php echo $row["contact"] ?></li>
                                <li>gender:<?php echo $row["gender"] ?></li>
                                <li>city:><?php echo $row["city"] ?></li>
                            </ul>

                    </li>
                    <?php } ?>
                </ol>
            <?php } else {
                echo "No data found";
            }
        ?>
    </body>
</html>
