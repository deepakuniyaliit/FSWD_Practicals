<?php
include ('config.php');
?>

<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];

    $sql="INSERT INTO users (Username, Email, Gender, City) VALUES ('$username','$email','$gender','$city')";
    mysqli_query($comm,$sql);
}
?>

<html>
    <head>
        <title>HTML FORM</title>
    </head>
<body>
    <form method="GET" action="add.php">
        USERNAME <input type="text" name="username" placeholder="Type your username" required><br><br>
        E-MAIL <input type="email" name="email" placeholder="Type your E-mail" required><br><br>
        CONTACT NO. <input type="tel" pattern="^\d{10}$" name="contact" placeholder="Type 10 digit contact number" required><br><br>
        GENDER  MALE <input type="radio" name="gender" value="male" required>
        FEMALE <input type="radio" name="gender" value="female"><br><br>
        
        SELECT CITY <select name="city" required>
            <option value="Dehradun">Dehradun</option>
            <option value="Delhi">Delhi</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Agra">Agra</option>
            <option value="Pune">Pune</option>
            <option value="Banglore">Banglore</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Noida">Noida</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Mysore">Mysore</option>
            <option value="Coimbatore">Coimbatore</option>
            <option value="Chennai">Chennai</option>
            <option value="Shimla">Shimla</option>
        </select><br>
        <input type="SUBMIT" name="submit" value="SUBMIT">
    </form>
</body>
</html>
