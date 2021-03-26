<?php
include('configuration.php');
?>

<?php
    if(isset($_POST['Submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['Gender'];
        $city = $_POST['City'];

        $sql = "INSERT INTO `users` (`username`, `e-mail`, `Gender`, `City`) VALUES ('$username', '$email', '$gender', '$city')";
        mysqli_query($conn , $sql);
    
    }
    else{
        echo "Please click the submit button to submit data";
    }

?>

<html>
    <body>
        
        <form method="POST" action="add.php">
        Username : <input type="text" name="username" placeholder = "Type your username" required><br>
        Email : <input type="email" name="email" placeholder = "Type your email" required><br>
        Gender:<br>
        <input type="radio" value = "MALE" name="Gender">Male<br>
        <input type="radio" value = "FEMALE" name="Gender">Female<br>
        <input type="radio" value = "OTHERS" name="Gender">Other<br>
        City :
        <select id="City" name="City">
        <option value="Mumbai">Mumbai</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Mussoorie">Mussoorie</option>
        <option value="Nanital">Nanital</option>
        <option value="Chennai">Chennai</option>
        <option value="Pune">Pune</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Lucknow">Lucknow</option>
  </select><br>
        <input type="submit" value="Submit" name="Submit">
    </form>
    </body>
</html>