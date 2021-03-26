<?php include("configuration.php"); ?>

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
        ?>
        <h3>Users Data -</h3>
        <ol>
            <?php if ((mysqli_num_rows($result) > 0)) { ?>
                        <?php while (($row = mysqli_fetch_assoc($result))) { ?>
                            <br>
                            <li><b>Details of the users with ID = <?php echo $row["id"] ?></b></li>
                            <ul>
                                <li>UserName - <?php echo $row["username"] ?></li>
                                <li>Email - <?php echo $row["email"] ?></li>
                                <li>Contact - <?php echo $row["contact"] ?></li>
                                <li>Gender - <?php echo $row["gender"] ?></li>
                                <li>City - <?php echo $row["city"] ?></li>
                            </ul>
                        <?php } ?>
                    </tbody>
                </table>   
            <?php } else {
                echo "No data found";
            }
        ?>
        </ol>
    </body>

    
</html>