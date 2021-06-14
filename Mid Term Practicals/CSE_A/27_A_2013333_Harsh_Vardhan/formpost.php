<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <form name="forms" method="post" action="form.php">
      USERNAME <input type="text" name="username" placeholder="Enter username" required><br>
      EMAIL <input type="email" name="email" placeholder="Enter your email" required><br>
      CONTACT <input type="text" name="contact" placeholder="Enter contact" required><br>
      GENDER  <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="other">other
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
