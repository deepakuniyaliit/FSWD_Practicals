<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
//  var         API             server     user   pwd    dB 
if ($connection) {
    echo "We are connected";
} else {
    die("Database connection failed");
}
