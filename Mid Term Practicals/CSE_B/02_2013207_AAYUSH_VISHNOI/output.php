<?php

$usr= $_GET['usrname'];
$contact=$_GET['contact'];
$email=$_GET['email'];
$gender=$_GET['gender'];
$city=$_GET['city'];

if(empty($usr) || empty($email) || empty($contact) || empty($gender) || empty($city)){
    echo "Please fill up the details... ";
}
else{
    echo "$usr\n\n";
    echo "$contact\n\n";
    echo "$email\n\n";
    echo "$gender\n\n";
    echo "$city\n\n";
}
?>