<?php

$user=$_GET['username'];
$contact=$_GET['contact'];
$email=$_GET['email'];
$gender=$_GET['gender'];
$city=$_GET['city'];

if(empty($user) || empty($contact) || empty($email) || empty($gender) || empty($city)){
    echo "please fill all details";
 }
 else{
     echo $user;
     echo $contact;
     echo $email;
     echo $gender;
     echo $city;

 }
 ?>