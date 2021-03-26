<?php
if (isset($_POST['submit'])) {

    $connection = mysqli_connect('localhost', 'root', '', 'webpractical');
    //  var         API             server     user   pwd    dB 
    if ($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }
}
