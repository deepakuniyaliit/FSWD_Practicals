<?php
include_once'config.php';
?>
<?php
if(isset($_POST['submit']))
{
    $username=$_POST['UserName'];
    $email=$_POST['Email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $contact=$_POST['contact'];
    $sql="INSERT INTO `users` (`id`, `username`, `email`, `gender`, `city`) VALUES (NULL, '$username', '$email', '$gender', '$city')";
    mysqli_query($conn,$sql);
}
if(empty($username)||empty($email)||empty($gender)||empty($city)||empty($contact))
{
    echo"empty";
}
else{
    echo"not empty";
}
if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $contact)) {
    echo "phone is valid";
  }
  else echo"not valid";

else{
   echo "please click on submit button ...";
}
?>