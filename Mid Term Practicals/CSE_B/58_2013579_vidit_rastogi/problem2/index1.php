<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    function isEmpty($text)
    {
        if(strlen($text)>0)
        {
            return $text;
        }
        else{
            return "empty";
        }
    }
    function isPhone($text)
    {
        if(strlen($text)==10)
        {
            return $text;
        }
        else{
            return "invalid";
        }
    }
    $username =isEmpty($_POST['username']); 
    $contact=isPhone( $_POST['phone']);
    $email = isEmpty($_POST['email']) ;
    
    $gender =isEmpty($_POST['gender']);
  
    $city = isEmpty( $_POST['city']);
    echo "name:$username city:$city phone:$contact email:$email gender:$gender";


}

?>