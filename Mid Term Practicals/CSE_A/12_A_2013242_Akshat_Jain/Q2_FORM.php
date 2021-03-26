<?php
include ('configuration.php');
?>
<?php
if(isset($_POST['submit']))
{
   $username=test_input($_POST['username']);
   $email=test_input($_POST['email']);
   $city=test_input($_POST['city']);
   $contact=test_input($_POST['contact']);
   $gender=test_input($_POST['gender']);
   $contact=test_input2($_POST['contact']);
  // if($contact)
   $sql = "INSERT INTO Users (username, email,city,contact,gender)
   VALUES ('$username', '$email', '$city','$contact','$gender');"
   
}
function test_input($data)
{
    if(empty($data))
    {
        echo "YOU DIDN'T ENTER DATA";
        return $data;
    }
}
function test_input2($data)
{
    $length = strlen($data);
    if ( $length < 10 && $length > 10) {  
        $error = "Mobile must have 10 digits.";  
                echo $error;  
}
?>
<html>
<head>
<script>
function validateForm() {
  var x = document.forms["Q2_FORM"]["username"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var y = document.forms["Q2_FORM"]["contact"].value;
  if (y.length!=10) {
    alert("length must be 10");
    return false;
  }
  
}
</script>
</head>
<body>
<form name="Q2_FORM" action="Q2_FORM.php"  onsubmit="return validateForm()"  method="get">
  USERNAME:  <input type="text" name="username" placeholder="Enter Username" required ><br>
  EMAIL<input type="email" name="email" placeholder="Enter Email" required ><br>
  CONTACT:<input type="text" name="contact" placeholder="Enter 10 digit contact" required ><br>
  CITY<select  name="city" >
                 <option>Jaipur</option>
                 <option>Mussoorie</option>
                 <option>Chandigarh</option>
                 <option>Nainital</option>
                 <option>Lucknow</option>
                 <option>Pune</option>
                 <option>Bangalore</option>
                 <option>Hyderabad</option>s
                 <option>Mumbai</option>
                 <option>Chennai</option>
                 </select><br>
        GENDER  &nbsp MALE<input type="radio" name="gender" value="male">
        &nbsp FEMALE<input type="radio" name="gender" value="female">
        OTHER<input type="radio" name="gender" value="other">

        <br>
         <input type="submit" name="submit" value="submit">
</form>

</body>
</html>