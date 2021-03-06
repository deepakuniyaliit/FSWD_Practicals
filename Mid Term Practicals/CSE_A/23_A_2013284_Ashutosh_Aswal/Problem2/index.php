<?php
    include('configuration.php');
    function validate($username, $gender, $email, $contact, $city)
    {
        if(empty($username) || empty($gender) || empty($email) || empty($contact) || empty($city))
        {
            return false;
        }

        if(strlen($contact) != 10)
        {
            return false;
        }

        return true;
    }
    if(isset($_POST['Add']))
    {
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        if(validate($username, $gender, $email, $contact, $city))
        {
            $query = "INSERT INTO `users` (`id`, `username`, `gender`, `email`, `contact`, `city`) VALUES (NULL, '$username', '$gender', '$email', '$contact', '$city')";
            if(mysqli_query($db, $query) == false)
            {
                echo "Insertion Failed!";
            }
        }
        else
        {
            echo "Invalid Data!";
        }
    }
?>
<html>
    <head>
        <title>ADD</title>
    </head>
    <body>
        <form method = 'post' action = 'add.php'>
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type = 'text' name = 'username' placeholder='Username' required/>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type = 'email' name = 'email' placeholder='Email' required/>
                    </td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td>
                        <input type = 'tel' name = 'contact' pattern = '[0-9]{10}' placeholder='Phone Number' required/>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type= 'radio' name = 'gender' value = 'Male' required/>Male
                        <input type= 'radio' name = 'gender' value = 'Female' required/>Female
                        <input type= 'radio' name = 'gender' value = 'Other' required/>Other
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>
                        <select name = 'city'>
                            <option value = 'Mumbai'>Mumbai</option>
                            <option value = 'Delhi'>Delhi</option>
                            <option value = 'Jaipur'>Jaipur</option>
                            <option value = 'Mussoorie'>Mussoorie</option>
                            <option value = 'Nanital'>Nanital</option>
                            <option value = 'Chennai'>Chennai</option>
                            <option value = 'Bangalore'>Bangalore</option>
                            <option value = 'Hyderabad'>Hyderabad</option>
                            <option value = 'Lucknow'>Lucknow</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' align='center'>
                        <input type='submit' name = 'Add' value = 'ADD'/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>