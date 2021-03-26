<?php
    include('configuration.php');
    
    function validate($un, $g, $e, $c, $ct)
    {
        if(empty($un) || empty($g) || empty($e) || empty($c) || empty($ct))
            return false;
        else if(strlen($c) != 10)
            return false;
        else 
            return true;
    }
    if(isset($_POST['submit']))
    {
        $un = $_POST["username"];
        $e = $_POST["email"];
        $g = $_POST["gender"];
        $c = $_POST["phone"]
        $ct = $_POST["city"];
        if(validate($un, $g, $e, $c, $ct))
        {
            $query = "INSERT INTO `users` (`id`, `username`, `gender`, `email`, `contact`, `city`) VALUES (NULL, '$username', '$gender', '$email', '$contact', '$city')";
            if(mysqli_query($db, $query) == false) echo "Insert Failed";
        }
        else
        {
            echo "Error";
        }
    }
?>
