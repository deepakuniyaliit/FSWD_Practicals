<?php
    include('configuration.php');
    
    function validate($un, $g, $e, $c, $ct)
    {
        if(empty($un) || empty($g) || empty($e) || empty($c) || empty($ct))
            return false;
        else if(strlen($c) != 10)
            return false;
        else 
            return true;
    }
    if(isset($_POST['submit']))
    {
        $un = $_POST["username"];
        $e = $_POST["email"];
        $g = $_POST["gender"];
        $c = $_POST["phone"]
        $ct = $_POST["city"];
        if(validate($un, $g, $e, $c, $ct))
        {
            $query = "INSERT INTO `users` (`id`, `username`, `gender`, `email`, `contact`, `city`) VALUES (NULL, '$username', '$gender', '$email', '$contact', '$city')";
            if(mysqli_query($db, $query) == false) echo "Insert Failed";
        }
        else
        {
            echo "Error";
        }
    }
?>
<html>
    <head>
        <title>Inserting</title>
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
                <input type='submit' name = 'submit' value = 'submit'/>
            </table>
        </form>
    </body>
</html>
