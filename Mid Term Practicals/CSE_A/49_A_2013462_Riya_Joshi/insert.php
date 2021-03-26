
<?php require_once("configuration.php"); ?>

    <?php
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $contact= $_POST['contact'];
                $gender = $_POST['gender'];
                $city = $_POST['city'];

                $sql = "INSERT INTO users (UserName, Email, Contact, Gender, City) VALUES ('$username', '$email', '$contact' ,'$gender', '$city')";

                if (!(mysqli_query($conn, $sql))) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

            }
    ?>