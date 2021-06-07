<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webpractical";

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
?>