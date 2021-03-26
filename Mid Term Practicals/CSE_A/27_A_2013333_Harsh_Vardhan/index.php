<?php
include('configuration.php');
 ?>
<?php
if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $email = $_POST['email'];
  $contact=$_POST['contact'];
  $gender=$_POST['gender'];
  $city=$_POST['city'];

  $sql="INSERT INTO `users`(`username`,`email`,`contact`,`gender`,`city`) VALUES ('$username','$email','$contact','$gender','$city')";
  mysqli_query($conn,$sql);
}
else {
  echo "Please click submit.";
}
 ?>
