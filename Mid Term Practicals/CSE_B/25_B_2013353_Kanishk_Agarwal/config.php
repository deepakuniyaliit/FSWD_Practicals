<?php
    if(isset($_POST["submit"])){
      $username=$_POST["username"];
      $email=$_POST["email"];
      $contact=$_POST["contact"];
      $gender=$_POST["gender"];
      $city=$_POST["city"];
    }
    else
      echo "<br>No Input";
    ?>