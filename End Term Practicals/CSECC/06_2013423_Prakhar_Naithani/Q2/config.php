<!DOCTYPE html>

<html>
    <body>
        <?php

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "book";

            $conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
        ?>
    </body>
</html>