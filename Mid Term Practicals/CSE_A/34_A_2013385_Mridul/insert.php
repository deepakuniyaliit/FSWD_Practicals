
<?php include("configuration.php"); ?>

<!DOCTYPE html>

<html>
    <body>
        <?php
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $gender = $_POST['gender'];
                $city = $_POST['city'];

                $sql = "INSERT INTO users (username, email, contact, gender, city) VALUES ('$username', '$email', '$number', '$gender', '$city')";

                if (!(mysqli_query($conn, $sql))) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        ?>
    </body>
</html>