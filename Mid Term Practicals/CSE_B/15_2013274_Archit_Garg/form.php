<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="GET" action="form.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    CONTACT <input type="tel" name="contact" placeholder="Type Your contact" pattern="[1-9]{1}[0-9]{9}" required><br>
    GENDER<br> <input type="radio" id="male" name="gender" value="male" checked="checked">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    <br>
    Select City <select name="city">
        <option value="Mumbai">Mumbai</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Mussorie">Mussorie</option>
        <option value="Nanital">Nanital</option>
        <option value="Chennai">Chennai</option>
        <option value="Pune">Pune</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Lucknow">Lucknow</option>
    </select><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
</form>
</body>
</html>

