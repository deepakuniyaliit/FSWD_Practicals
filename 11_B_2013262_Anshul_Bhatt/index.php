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
}
else{
   echo "please click on submit button ...";
}
?>