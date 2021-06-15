<?php
    $conn = mysqli_connect('localhost', 'Shivam', 'passwrd', 'form');
    if(! $conn){
        echo "Connection Error" .mysqli_connect_error();
    }
?>