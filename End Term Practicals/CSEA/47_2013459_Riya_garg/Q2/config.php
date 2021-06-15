<!DOCTYPE html>

<html>
    <body>
        <?php

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $databasename = "BookStore";

            $conn = mysqli_connect($hostname, $username, $password, $databasename);
             if($conn){
              echo "connection success";
          }
          else
          { 
          	echo "connection failed....." + mysqli_connect_error();

          }
        ?>
    </body>
</html>
