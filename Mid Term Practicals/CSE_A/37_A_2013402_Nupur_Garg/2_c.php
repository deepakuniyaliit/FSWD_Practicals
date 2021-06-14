<html>
<head>
<style>
table,th,td{
border: 1px solid black;
border-collapse: collapse;
}

</style>
<script>
function validateForm() {
  var x = document.forms["FORM"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var y = document.forms["FORM"]["contact"].value;
  if (y.length!=10) {
    alert("length must be 10");
    return false;
  }
 
}
</script>
</head>
<body>

<form name="FORM" action=2c.html onsubmit="return validateForm()" method="post">
  Username: <input type="text" name="name" required><br>
  EMAIL<input type="email" name="email" required ><br>
  CONTACT<input type="text" name="contact" required><br>
  CITY<select  name="City" >
                 <option>Dehradun</option>
                 <option>Delhi</option>
                 <option>Chandigarh</option>
                 <option>Mumbai</option>
                 <option>Amritsar</option>
                 <option>Others</option>
                 </select><br>
        
                Gender
        Male<input type="radio" name="gender" value="Male">
        Female<input type="radio" name="gender" value="Female">
        
        <br>


  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['City'];
    $gender = $_POST['Gender'];
    
   
    
    <table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>City</th>
    <th>Gender</th>
   
    
    </tr>
    <tr>
    <td>$name</td>
    <td>$email</td>
    <td>$contact</td>
    <td>$city</td>
    <td>$gender</td>
   
     </tr>
     </table>
        ";}

 ?>