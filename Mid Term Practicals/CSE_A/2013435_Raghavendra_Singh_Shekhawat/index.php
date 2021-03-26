<?php
    // Form Validation
    
    if(isset($_POST['submit'])){
         // Email
        echo "DATA RECIEVED VIA POST !!";
        $username = $_POST['username'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
         
        echo "<br>" .$contact ."\t" . $username ."\t" .$gender . "\t" .$email ."\t" .$city;
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<?php include('input_form.php'); ?>

</html>