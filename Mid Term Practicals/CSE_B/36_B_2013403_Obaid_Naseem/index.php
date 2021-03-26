<?php
include_once('configuration.php');
?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['contact'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $sql = "INSERT INTO users (`id`, username, email, contact, gender, `city`) VALUES (NULL, '$username', '$email', '$gender', '$city')";
    mysqli_query($conn,$sql);
}
else{
    echo "please click submit button";
}
?>
<html>
    <head>
        <title>Form Data on Table</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            UserName*<input type="text" name="username" placeholder="First Name" required/><br>
            E-mail*<input type="email" name="email" placeholder="Mail@example.com"required/><br>
            Contact:<input type="text" name="contact" required><br>
            Gender  Male <input type="radio" name="gender" value="male">
            Female <input type="radio" name="gender" value="female"><br>
            City*<Select name="city" required>
                <option></option>
                <option value="Mumbai"> Mumbai</option>
                <option value="Delhi"> Delhi</option>
                <option value="Jaipur"> Jaipur</option>
                <option value="Mussoorie"> Mussoorie</option>
                <option value="Nanital"> Nanital</option>
                <option value="Chennai"> Chennai</option>
                <option value="Pune"> Pune</option>
                <option value="Bangalore"> Bangalore</option>
                <option value="Bangalore"> Bangalore</option>
                <option value="Hyderabad"> Hyderabad</option>
                <option value="Lucknow"> Lucknow</option>
                </Select><br>
            <input type="submit" name="submit" value="Click here to submit">
        </form>
    </body>
</html>