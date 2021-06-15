<?php

$db = mysqli_connect("localhost","root","","BookStore");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>