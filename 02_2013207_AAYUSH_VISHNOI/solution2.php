<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution 2</title>
    <style>
        .form{
            border:5px solid black;
            width:60%;
            margin:90px;
            padding:20px;
            text-transform:uppercase;
        }
        .form input{
            padding-left:7px;
            margin-left:10px;
        }
        .form button{
            width:120px;
            padding:7px;
            background-color:blue;
            border:none;
            border-radius:7px;
            color:white;
        }
    </style>
</head>
<body>
<div class="form">
    <form action="solution2.php" method="POST">
        Username:<input type="text" name="username" placeholder="Enter Username"required ><br><br>
        Email:<input type="email" name="email" placeholder="Enter Email" required><br><br>
        Contact:<input type="text" name="tel" placeholder="Enter Contact" required maxlength="10"><br><br>
        Gender:<br><br><input type="radio" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label><br><br>
        <label for="city">Select City:</label><br><br>
        <select name="city" id="city" required>
            <option value="mumbai">Mumbai</option>
            <option value="dehradun">Dehradun</option>
            <option value="jaipur">Jaipur</option>
            <option value="mussorie">Mussorie</option>
            <option value="chennai">Chennai</option>
            <option value="pune">Pune</option>
            <option value="bangalore">Bangalore</option>
            <option value="hyderabad">Hyderabad</option>
            <option value="lucknow">Lucknow</option>
        </select><br><br>
        <button type="Submit">Submit</button> 
    </form>
</div>
   <?php

   if(isset($_POST['submit'])){
    $usr= $_POST['username'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];

    echo "$usr\n\n";
       echo "$contact\n\n";
       echo "$email\n\n";
       echo "$gender\n\n";
       echo "$city\n\n";
   }
   else{
       echo "Enter Details...";
   }
   
//    if(empty($usr) || empty($email) || empty($contact) || empty($gender) || empty($city)){
//        echo "Please fill up the details... ";
//    }
//    else{
       
//    }
   ?>
   <?php
   if(isset($_POST['submit'])){
    $usr= $_POST['username'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];

    $sql="INSERT INTO 'users('username','email','contact','gender','city') VALUES('$usr','$email','$contact','$gender','$city')";
   }
   ?>
</body>
</html>
