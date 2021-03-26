<html>

<head>
    <title>PHP TABLE</title>
</head>

<body>
    <form method="POST" action="Validate.php">
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

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    if (empty($_POST['name'])) {
        echo "Empty 'Name' is not allowed.";
    } else if (empty($_POST['email'])) {
        echo "Empty 'Email' is not allowed.";
    } else if (empty($_POST['contact'])) {
        echo "Empty 'Contact' is not allowed.";
    } else if (empty($_POST['city'])) {
        echo "Empty city is not allowed.";
    }
     else {
        echo "Name : $name <br/>";
        echo "email : $email <br/>";
        echo "contact : $contact <br/>";
        echo "city : $city <br/>";
     }
?>