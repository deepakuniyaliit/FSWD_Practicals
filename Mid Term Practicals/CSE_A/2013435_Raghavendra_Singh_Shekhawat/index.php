<?php
    // Form Validation
    

    if(isset($_POST['submit'])){
         // Email
        
        
        $username = $_POST['username'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];


        //echo "<br>" .$contact ."\t" . $username ."\t" .$gender . "\t" .$email ."\t" .$city;
        include('configurations.php');
        $insert_data = "INSERT INTO `users` (`username`, `email`, `contact`, `gender`, `city`) VALUES ('$username', '$email', '$contact', '$gender', '$city' );";
        echo "<br>" .$insert_data;
        if(!mysqli_query($conn, $insert_data)){
            echo "Data Not Inserted !!!";
        }
        else{
              echo "Data Inserted Successfully !!!";
        }
    }


?>




<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<?php include('input_form.php'); ?>


</html>