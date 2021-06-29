<!DOCTYPE html>
    <html lang="en">

        <body>
            <?php
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $dbname = "practise";

                $conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
             ?>
            
            
        </body>
    </html>