<?php
    
    if(isset($_POST['Submit'])){
        $name = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
   
      
                echo "
            <table border='1'>
            <tr>
            <td colspan='8'>FORM DATA</td>
              </tr>
            <tr>
            <th>Name</th>
			<th>Email</th>
			<th>Contact</th>
            <th>City</th>
            <th>Course</th>
            <th colspan='3'>Interests</th>
            </tr>
            <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$gender</td>
            <td>$course</td>
            <td>$city</td>
     </tr></table>";
			}

?>
<html lang="en">
<head>
    
    <title>HTML FORMS</title>
</head>
<body>
    <form method="POST">
        USERNAME <input type="text" name="username" placeholder="Type Your Username" required> <br><br>

        E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required> <br><br>
        Contact* <input type="text" name="contact" placeholder="+91 0000000000" required> <br><br>
        Gender <br> Male <input type="radio" name="gender" value="Male"> <br>
        Female <input type="radio" name="gender" value="Female"> <br>
        Other <input type="radio" name="gender" value="Other"> <br><br>
        City <select name="city" required>
            <option>Select City</option>
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
        </select> <br> <br>
        <input type="Submit" value="Cilck Here to Submit Your Data" name="submit">
    </form>
</body>
</html>