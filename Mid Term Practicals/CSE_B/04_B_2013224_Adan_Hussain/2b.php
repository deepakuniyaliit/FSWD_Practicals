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

<form name="FORM" action="form_table.php" onsubmit="return validateForm()" method="get">
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
    $course = $_POST['Course'];
    $interest = $_POST['interest'];
   
    //echo "Name : $name <br/>";
       // echo "Email : $email <br/>";
        //echo "Contact : $contact <br/>";
        //echo "Course : $course <br/>";
    //if (sizeof($interest) < 3||sizeof($interest)>5) {
        //echo "At least select any 3 and at max 5 Interests.";}}
    echo "
    <table>
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
    <td>$city</td>
    <td>$course</td>
    <td>$interest[0]</td>
    <td>$interest[1]</td>
    <td>$interest[2]</td>
     </tr>
     </table>
        ";}

 ?>