<?php
include('config.php')
?>

<?php
    if(isset($_POST['submit']))
    {
        $username =$_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $sql = "INSERT INTO `users` (`id`, `username`, `email`, `contact`, `city`) VALUES (NULL, '$username', '$email', '$contact', '$city')";
        mysqli_query($conn, $sql);

    }
    else
    {
        echo "Please click submit button";
    }
?>
