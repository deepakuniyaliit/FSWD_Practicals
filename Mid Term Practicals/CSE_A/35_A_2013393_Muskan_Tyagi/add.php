<?php
include_once('config.php');
?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gen = $_POST['gender'];
    $cty = $_POST['city'];

    $sql = "INSERT INTO `users` (`id`, `username`, `email`,'contact', `gender`, `city`) VALUES (NULL, '$username', '$email', '$gender', '$city')";
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
        <form method="POST" action="add.php">
            UserName*<input type="text" name="username" placeholder="First Name" required/><br>
            E-mail*<input type="email" name="email" placeholder="Mail@example.com"required/><br>
            contact*<input type="number" name="contact" prequired/><br>
            Gender  Male <input type="radio" name="gender" value="male">
            Female <input type="radio" name="gender" value="female"><br>
            other<input type="radio" name="gender" value="other"><br>
            City*<Select name="city" required>
                <option value="1"> Mumbai</option>
                <option value="2"> Delhi</option>
                <option value="3"> Nainital</option>
                <option value="4"> Chennai</option>
                <option value="5"> Jaipur</option>
                <option value="6"> Banglore</option>
                <option value="7">Mussourie</option>
                <option value="8"> Pune</option>
                <option value="9"> Hyderabad</option>
                <option value="10"> Lucknow</option>
                </Select><br>
            <input type="submit" name="submit" value="Click here to submit">
        </form>
    </body>
</html>