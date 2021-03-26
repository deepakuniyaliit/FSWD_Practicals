<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action=""method="post">
            <div class="row">
                <input type="text" id="username" name="username" placeholder = "Username">
                <input type="email" id="email" name="email"placeholder = "Email">
                <input type="text" id="contact" name="contact" pattern="[6-9]{1}[0-9]{9}"required>
                <input type="radio" name="gender" id="gender" value="Female"required> Female
                <input type="radio" name="gender" value="Male"required> Male
                <select name="location" id="location"required>
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Mussorrie">Mussorrie</option>
                <option value="Nainital">Nainital</option>
                <option value="Chennai">Chennai</option>
                <option value="Chennai">Chennai</option>
                <option value="Pune">Pune</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Lucknow">Mumbai</option>
                </select>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['form_submitted'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $location = mysqli_real_escape_string($conn,$_POST['location']);
    $contact = mysqli_real_escape_string($conn,$_POST['contact']);
    $id="";
    $sql = "INSERT INTO `cnfiguration`(`id`, `username`, `email`, `contact`,`gender`, `location`) VALUES ('$id','$username','$email','$contact','$gender','$location')";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo "Form Submitted";
    }
}