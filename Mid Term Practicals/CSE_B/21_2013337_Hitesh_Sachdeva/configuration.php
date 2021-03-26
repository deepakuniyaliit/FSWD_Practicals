<?php
 $hostname = "localhost";
 $username = "root";
 $password = "";
 $databasename = "Web";


 $conn = mysqli_connect($hostname, $username, $password,$databasename);
if($conn){
    echo"Connection sucessfull.....";
}
else{
echo"Connection failed......" . mysqli_connect_error();

}


?>