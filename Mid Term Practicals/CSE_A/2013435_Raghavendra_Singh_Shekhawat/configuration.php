<?php

    $conn = mysqli_connect('localhost', 'raghavendra', 'aabbccdd', 'Webpractical');

    if(!$conn){
        echo "Connection error" . mysqli_connect_error();
    }

?>