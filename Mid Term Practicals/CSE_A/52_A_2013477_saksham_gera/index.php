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
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while (($row = mysqli_fetch_assoc($result))) { ?>
                            <tr>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["username"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                              <td><?php echo $row["contact"] ?></td>
                                <td><?php echo $row["gender"] ?></td>
                                <td><?php echo $row["city"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>   

                <link rel="stylesheet" type="text/css" href="">
                <ol>
                    
                </ol>
            <?php } else {
                echo "No data found";
            }
        ?>
    </body>
</html>
