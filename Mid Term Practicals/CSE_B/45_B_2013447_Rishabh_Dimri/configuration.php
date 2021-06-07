<?php
include('config.php');
?>

<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$$databasename = "WebPractical";

$conn=mysqli_connect($hostnam,$usrname,$password,$$databasename);
if($conn){
echo ""Connection Successful...:;
}
else{
echo "Connection failed..."+mysqli_connect_error();
}
?>

