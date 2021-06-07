<?php
   require_once('configuration.php');
   if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $sql = "INSERT INTO `users` (`username`, `email`,`contact`, `gender`, `city`) VALUES ('$username', '$email','$contact ', '$gender','$city')";

        if (!(mysqli_query($conn, $sql))) {
            echo "Invalid Query";
        }
   }  
?>
<html>
    <head>
       <title>HTML FORM</title>
    </head>
    <body>
        <form method="POST" action="html_form.php">
            username
            <input type="text" name="username" placeholder="UserName" required><br>
            email
            <input type="email" name="email" placeholder="email" required><br>
            contact
            <input type="tel" name="contact" placeholder="contact" pattern="[0-9]{10}" required ><br>
            gender
            Male<input type="radio" name="gender" value="male">
            Female<input type="radio" name="gender" value="female">
            others<input type="radio" name="gender" value="male"><br>
            City
            <select name="city" required>
            <option value="">city</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Mussoorie">Mussoorie</option>
            <option value="Nainital">Nainital</option>
            <option value="Chennai">Chennai</option>
            <option value="Pune">Pune</option>
            <option value="Banglore">Banglore</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Lucknow">Lucknow</option>
            Submit
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
