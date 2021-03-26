
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $contactErr = "";
$name = $email = $gender = $contact = $city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["contact"])) {
    $contact = "";
  } else {
    $contact = test_input($_POST["contact"]);
  }

  if (empty($_POST["city"])) {
    $city = "";
  } else {
    $city = test_input($_POST["city"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form action="" method="POST" name="form1" id="form1">
            <div>
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" placeholder="Your Username" required>
                <br><br>
            </div>
            <div>
                <label for="email">E-Mail: </label>
                <input type="email" id="email" name="email" placeholder="Mail@example.com" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*" required>
                <br><br>
            </div>
            <div>
                <label for="number">Contact:</label>
                <input type="text" id="number" name="number" placeholder="Contact Number" minlength="10" maxlength="10" required onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));"><br><br>
            </div>
            <div>
                <span>Gender: </span>
                <input type="radio" id="male" name="gender" value="Male" required>
                <label for="male"> Male </label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female"> Female </label>
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other"> Other </label>
                <br><br>
            </div>
            <div>
                <label for="city">City: </label>
                <select name="city" id="city" required>
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
                </select>
                <br><br>
            </div>
            <div>
                <input type="submit" name="submit" id="submit" value="SUBMIT">
            <div>
        </form>

</body>
</html>