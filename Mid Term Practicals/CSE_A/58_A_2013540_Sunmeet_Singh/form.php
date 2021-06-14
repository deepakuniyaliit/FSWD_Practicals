<?php
    include('configuration.php');
    function validate($username ,  $email , $contact , $gender , $city)
    {
        if(empty($username) ||  empty($email) || empty($contact) ||empty($gender) || empty($city))
        {
            return false;
        }

        if(strlen($contact) != 10)
        {
            return false;
        }

        return true;
    }
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        if(validate($username, $email, $contact , $gender, $city))
        {
            $sql = "INSERT INTO users (username , email , contact , gender , city) VALUES ( '$username' , '$email' , '$contact' , '$gender' , '$city')";
            mysqli_query($conn, $sql);
        }
        else
        {
            echo "Invalid Data!";
        }
    }
?>
<html>
    <head>
        <title>HTML FORM</title>
    </head>
    <body>
        <form method="POST" action="form.php">
            USERNAME<input type="text" name="username"><br>
            E-Mail<input type="email" name="email"><br> 
            CONTACT<input type="text" name="contact"><br>
            GENDER<input type="text" name="gender"><br> 
            Select CITY<select name="city">
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Mussoorie">Mussoorie</option>
                <option value="Nanital">Nanital</option>
                <option value="Cheenai">Cheenai</option>
                <option value="Pune">Pune</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Lucknow">Lucknow</option>
                </select>
                <br>
            <input type="submit" name="submit" value="CLICK">
        </form>
    </body>
</html>