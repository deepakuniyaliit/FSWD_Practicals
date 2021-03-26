<?php
include("configuration.php");
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $gender = $_POST["gender"];
    $city = $_POST["city"];   
}

validation($username,$email,$contact,$gender,$city);

    function validation($username,$email,$contact,$gender,$city){
        $flag = true;
        if(empty($username) || empty($email) || empty($contact) || empty($gender) || empty($city) || strlen($contact)!=10){
            $flag = false;
        }
    }
?>
