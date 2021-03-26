<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="webpractical";

    $conn=mysqli_connect($server,$username,$password,$database);

    if(!$conn){
	echo "Unable to connect",mysqli_connect_error();
    }
    else{
        echo "<h1>Connection Succesful</h1><br>";
    }
?>
