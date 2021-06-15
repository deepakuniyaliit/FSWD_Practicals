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
            $sql = "SELECT * FROM Detail";
            $result = mysqli_query($conn, $sql);

            if ((mysqli_num_rows($result) > 0)) { ?>
                <table>
                    <thead>
                        <tr>
                            <th>Book ID</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>ISBN</th>
                            <th>Publisher</th>
                            <th>Publication Year</th>
                            <th>Pages</th>
                            <th>Book Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while (($row = mysqli_fetch_assoc($result))) { ?>
                            <tr>
                                <td><?php echo $row["Book ID"] ?></td>
                                <td><?php echo $row["Book Name"] ?></td>
                                <td><?php echo $row["Author"] ?></td>
                              <td><?php echo $row["ISBN"] ?></td>
                                <td><?php echo $row["Publisher"] ?></td>
                                <td><?php echo $row["Publication Year"] ?></td>
                                <td><?php echo $row["Pages"] ?></td>
                                <td><?php echo $row["Book Types"] ?></td>
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