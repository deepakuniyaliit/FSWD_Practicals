<?php
$dbname = "bookstore";
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
    echo "Error";
    exit();
}
?>