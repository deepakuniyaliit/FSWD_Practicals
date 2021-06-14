<html>
<head>
  <title>html form</title>
</head>
<body>
  <form name="myform" method="post" action="form.php" onsubmit="return validateForm()">
    USERNAME <input type="text" name="username" placeholder="type your username" required><br>
    EMAIL <input type="email" name="email" placeholder="type your email" required><br>
    CONTACT <input type="text" name="contact" placeholder="type your contact" required><br>
    GENDER  <input type="radio" name="male" value="male">male
    <input type="radio" name="male" value="female">female
    <input type="radio" name="male" value="other">other
    <br>
    SELECT CITY<select name="city">
      <option value="dehradun">dehradun</option>
      <option value="delhi">delhi</option>
      <option value="jaipur">jaipur</option>
      <option value="mussorie">Mussorie</option>
      <option value="nanital">Nanital</option>
      <option value="chennai">Chennai</option>
      <option value="banglore">Banglore</option>
      <option value="hyderabad">Hyderabad</option>
      <option value="lucknow">Lucknow</option>
    </select><br>
    <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>
