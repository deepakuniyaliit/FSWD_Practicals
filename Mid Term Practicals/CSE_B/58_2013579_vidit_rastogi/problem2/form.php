<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['username'];
    $phone=$_POST['phone'];
    $email = $_POST['email'];
    
    $gender = $_POST['gender'];
  
    $city = $_POST['city'];
    echo "name:$username city:$city phone:$phone email:$email gender:$gender";
}

?>