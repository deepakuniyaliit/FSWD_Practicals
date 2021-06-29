<?php
    $conn = mysqli_connect('localhost', 'raghavendra', 'aabbccdd', 'research');
    if(! $conn){
        echo "Connection Error" .mysqli_connect_error();
    }
?>