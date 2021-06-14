<?php require_once("config.php"); ?>

<!DOCTYPE html>

<html>
    <body>
        <?php
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $contact=$_POST['contact'];
                $gender = $_POST['gender'];
                $city = $_POST['city'];

                $sql = "INSERT INTO users (username, email, contact, gender, city) VALUES ($username', '$email','$contact' '$gender', '$city')";

                if (!(mysqli_query($conn, $sql))) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        ?>
    </body>
</html>
