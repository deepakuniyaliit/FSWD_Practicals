<?php
include('configuration.php')
?>
<?php
    if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $contact=$_POST['number'];
            $gender = $_POST['gender'];
            $city = $_POST['city'];

             $sql = "INSERT INTO `users` (`username`, `email`,'contact', `gender`, `city`) VALUES ('$username', '$email','$number', '$gender', '$city')";
             mysqli_query($conn, $sql);


    }
?>
