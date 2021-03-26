<?php
include 'establishishimg connection withdatabase.php';
?>
<?php
if(isset($_POST['submit']))
{
   $USER_NAME=$_POST['USERNAME'];
   $EMAIL=$_POST['EMAIL'];
   $CONTACT=$_POST['CONTACT'];
   $GENDER=$_POST['GENDER'];
   $CITY=$_POST['city'];

   $sql = "INSERT INTO `users` ( `user_name`, `email`, `contact`,`gender`, `city`) VALUES ('$USER_NAME', '$EMAIL', '$CONTACT','$GENDER','$CITY')";
   mysqli_query($conn,$sql);
}
else
{
    echo "No input";
}
?>
<html>
<head>
	<title>html form</title>
</head>
<body>
      <form method="post" action="insert details.php">
      	  USER NAME:<input type="text" name="USERNAME" placeholder="name" required><br>
      	  EMAIL:<input type="EMAIL" name="EMAIL" placeholder="email" required><br>
              CONTACT:<input type="text" name="CONTACT" placeholder="CONTACT" required><br>
      	  Select city:<select name="city">
      	   	<option>dehradun</option>
      	   	<option>delhi</option>
      	   	<option>hisar</option>
      	   	<option>tehri</option>
      	   	<option>none</option>
      	   </select><br>
            GENDER:<input type="text" name="GENDER" required>
      	  <input type="submit" value="click here to submit" name="submit">  
      </form>
</body>
</html>