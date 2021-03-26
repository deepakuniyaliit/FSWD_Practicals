<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $contact  = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $name = test_input($_GET["name"]);
  $email = test_input($_GET["email"]);
  $contact = test_input($_GET["contact"]);
  $gender = test_input($_GET["gender"]);
  $city=test_input($_GET["city"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Please enter the details:-</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" required>
  <br><br>
  E-mail: <input type="text" name="email" required>
  <br><br>
  Contact: <input type="number" name="number" required>
  <br><br>
 
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <label for="cars">City:</label>
  <select name="city" id="city">
    <option value="Mumbai">Mumbai</option>
    <option value="Delhi">Delhi</option>
    <option value="Mussorie">Mussorie</option>
    <option value="Nainital">Nainital</option>
    <option value="pune">Pune</option>
    <option value="Banglore">Banglore</option>
  </select>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $contact;
echo "<br>";
echo $city;
echo "<br>";
echo $gender;
?>

</body>
</html>