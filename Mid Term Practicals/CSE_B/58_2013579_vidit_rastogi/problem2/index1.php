<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['username'];
    $contact=$_POST['phone'];
    $email = $_POST['email'];
    
    $gender = $_POST['gender'];
  
    $city = $_POST['city'];
    echo "name:$username city:$city phone:$contact email:$email gender:$gender";
}

?>