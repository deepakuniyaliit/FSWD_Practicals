<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> Question 2 </title>
</head>
<body>
   <form action="P2.php" method="POST">
    USERNAME:<input type="text" name="username" placeholder="Enter your Username" required>
    </br></br>
    EMAIL:<input type="email" name="email" placeholder="Enter your email" required>
    </br></br>
    CONTACT:<input type="text" name="contact" placeholder="Enter your contact number"required maxlength="10">
    </br></br>
    GENDER:<input type="radio" name="gender" value="male" required>
    <label for="male">MALE</label>
    <input type="radio" name="gender" value="female" required>
    <label for="female">FEMALE</label>
    </br></br>
    <label for="cars">CITY</label>
    <select name="city" id="city" required>
      <option value="Mumbai">Mumbai</option>
      <option value="Delhi">Delhi</option>
      <option value="Bangalore">Bangalore</option>
      <option value="Lucknow">Lucknow</option>
      <option value="Jaipur">Jaipur</option>
      <option value="Mussoorie">Mussoorie</option>
      <option value="Nanital">Nanital</option>
      <option value="Chennai">Chennai</option>
      <option value="Hyderabad">Hyderabad</option>   
    </select>
    </br></br>
    <button type="submit">SUBMIT</button>
    </form>



</body>
<?php

$user=$_POST['username'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$city=$_POST['city'];

if(empty($user) || empty($contact) || empty($email) || empty($gender) || empty($city)){
    echo "please fill all details";
 }
 else{
     echo $user;
     echo $contact;
     echo $email;
     echo $gender;
     echo $city;

 }
 ?>
 <?php
 if(isset($_POST['submit']))
 {
   $username=$_POST['username'];
   $email=$_POST['email'];
   $contact=$_POST['contact'];
   $gender=$_POST['gender'];
   $city=$_POST['city'];
   $sql="INSERT INTO 'user'('username','email','contact','gender','city') VALUES('$username','$email','$contact','$gender','$city')";
 }
 ?>
<html> 