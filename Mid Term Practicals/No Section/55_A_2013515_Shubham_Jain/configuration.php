<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'WebPractical';

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
   
    if($conn == false){
        echo "Connection Failed..." + mysqli_connect_error();
    }

    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $email = $_POST['email'];
	$contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $sql = "INSERT INTO 'users' ('username', 'contact', 'email', 'gender', 'city') VALUES ('$username', '$email', 'contact', '$gender', '$city')";

        if (!(mysqli_query($conn, $sql))) {
            echo "Invalid Query";
        }
?>