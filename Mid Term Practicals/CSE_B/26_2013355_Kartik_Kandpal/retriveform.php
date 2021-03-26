<?php
include('configuration.php')
?>

<?php
if(isset($_POST['submit'])){

    $username = $_POST['name'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $city = $_POST['city'];
}
else{
    echo "please enter the details";
}

?>

<!DOCTYPE html>
<head>
</head>
<html>
  <body>
    <form action="kk.php" method="POST">
        Name <input type="text" name="name" required ><br>
        E-mail <input type="email" name="email" required ><br>
        Contact <input type="number" name="contact" pattern="^\d{10}$" required ><br>
        Gender:
        Male <input type="radio" value="male" name="gender">
        Female <input type="radio" value="female" name="gender"><br>
        Select City <select name="city">
	        <option value="Dehradun">Dehradun</option>
	        <option value="Delhi">Delhi</option>
	        <option value="Jaipur">Jaipur</option>
	        <option value="Nanital">Nanital</option>
	        <option value="Mussoorie">Mussoorie</option>
	        <option value="Lucknow">Lucknow</option>
    	</select><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
    </form>
  </body>
</html>