<?php
include('configuration.php')
?>

<?php
if(isset($_POST['submit'])){

    $username = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact_number'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    
}
$sql = "INSERT INTO `users` (`username`, `email`,`contact`, `gender`, `city`) VALUES ('$username', '$email','$gender','$contact' ,'$city')";

    if(!mysqli_query($conn, $sql)){
        echo "Error1 ". mysqli_error($conn);
    }
    else{
        echo "Data sent successfully....1";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>exam</title>
</head>
<body>
    <form method='POST' action="kk.php">
        Name <input type="text" name="name" required=""><br>
        E-mail <input type="email" name="email" required="" ><br>
        Contact-Number <input type="text" name="contact-Number" pattern="^\d{10}$" required="" ><br>
        Gender:
        Male <input type="radio" value="male" name="gender"> 
        Female <input type="radio" value="female" name="gender"><br>
        Select City <select name="city">
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Massorie">Massorie</option>
            <option value="Nainital">Nainital</option>
            <option value="Chennai">Chennai</option>
            <option value="Pune">Pune</option>
            <option value="Banglore">Bangalore</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Lucknow">Lucknow</option>
        </select><br>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>