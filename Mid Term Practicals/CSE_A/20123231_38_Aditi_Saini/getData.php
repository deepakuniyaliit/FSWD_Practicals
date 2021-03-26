<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'WebPractical');

{
$q="select * from users";
$rs=mysqli_query($con,$q);
echo "<center><table border=1 cellspacing=10 cellpadding=10>";
echo "<tr><td>ID</td><td>username</td><td>email</td><td>contact</td><td>gender</td><td>city</td></tr>";
while($r=mysqli_fetch_array($rs))
{
	echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td></tr>";
	
}
}
?>