<?php
include('config.php');
?>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['bname'];
$author=$_POST['aname'];
$isbn=$_POST['isbn'];
$publisher=$_POST['pname'];
$year=$_POST['pyear'];
$pages=$_POST['volume'];
$type=$_POST['bookType'];
$sql="INSERT INTO `book` (`Book Name`, `Author`, `ISBN`, `Publisher`,`Publication Year`,`Pages`,`Book Type`) VALUES ('$name', '$author', '$isbn', '$publisher',`$year`,`$pages`,`$type`)";
mysqli_query($conn,$sql);
}
else{
echo "click submit button first";
}
?>