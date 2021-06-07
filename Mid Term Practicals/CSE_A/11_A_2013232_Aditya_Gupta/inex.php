
<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];

    $sql="INSERT INTO users (Username, Email,Contact, Gender, City) VALUES ('$username','$email','$contact,'$gender','$city')";
    mysqli_query($comm,$sql);
}
?>
<?php
function validate($username,$email,$contact,$gender,$city)
{
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(strlen($username)==0 || strlen(($email)==0) || strlen(($contact)==0) || strlen(($gender)==0))
  {
      echo "Enter the details";
  }
  if(strlen($contact)==0 || strlen(($contact)>10) || strlen(($contact)<10) )
  {
      echo "Enter 10 diti number";
  }
}
?>