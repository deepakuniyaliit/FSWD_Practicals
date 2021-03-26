<?php
   require_once('configuration.php');
   if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $sql = "INSERT INTO `users` (`username`, `email`, `contact`, `gender`, `city`) VALUES ($username', '$email', '$contact', '$gender', '$city')";
        if (!(mysqli_query($conn, $sql))) {
            echo "Invalid Query";
        }
   }
    
?>

<html>
    <head>
        <title>Adding in Db</title>
    </head>
    <body>
        <form method="POST" action="insert.php">
        Username <input type="text" name="name" required><br><br>
            Email <input type="email" name="email" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*" required><br><br>
            Contact <input type="text" name="contact" pattern="[1-9]{1}[0-9]{9}" required><br><br>
            Gender <input type="radio" name="gender" value="Male" required/>Male
                <input type="radio" name="gender" value="Female" required/>Female
                <input type="radio" name="gender" value="Others" required/>Others<br><br>
            City 
            <select name="city" required>
                <option>Mumbai</option>
                <option>Delhi</option>
                <option>Jaipur</option> 
                <option>Mussoorie</option>
                <option>Nanital</option>
                <option>Chennai</option>
                <option>Pune</option>
                <option>Banglore</option>
                <option>Hyderabad</option>
                <option>Lucknow</option>
            </select> <br><br>
            <input type="submit" name="submit" value="SUBMIT">
        </form>
    </body>
</html>
