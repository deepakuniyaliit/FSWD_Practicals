<?php
 $hostname="localhost:7882";
 $username="root";
 $password="";
 $database="WebPractical";

 $conn = mysqli_connect($hostname, $username, $password, $database);
 if(!$conn){
  echo "connection successfull";
}else{
     echo "failed connection"+ mysqli_connect_error();
 }
?>