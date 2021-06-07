<?php
include('configuration.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HTML Form</title>
        <style>
            div{
                width:400px;
                height:300px;
                padding:10px;
                margin-left:35%;
                margin-right:30%;
                
                float:center;
            }
        </style>
    </head>
    <body>
        <div>
        <form method="GET" action="form.php">
            Username <input type="text" name="username" placeholder="Enter Your Username" required><br><br>
            E-Mail <input type="email" name="email" placeholder="Enter Your E-Mail" required><br><br>
            Select Gender - 
            Male <input type="radio" name="gender" value="M" checked>
            Female <input type="radio" name="gender" value="F"><br><br>
            
            Select Your City - <select name="city">
                <option value="Dehradun" selected>MUMBAI</option>
                <option value="Delhi">DELHI</option>
                <option value="Nanital">JAIPUR</option>
                <option value="Mussoorie">MUSSOORIE</option>
                <option value="Mussoorie">NAINITAL</option>
                <option value="Mussoorie">CHENNAI</option>
                <option value="Mussoorie">PUNE</option>
                <option value="Mussoorie">HYDERABAD</option>
                <option value="Mussoorie">BENGALORE</option>
                <option value="Mussoorie">LUCKNOW</option>
            </select>
            <br><br>
            <input type="submit" name="submit">
        </form>
        </div>
    </body>
</html>