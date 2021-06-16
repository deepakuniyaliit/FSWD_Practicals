<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'BookStore');
if($con)
{
$q="select * from users";
$rs=mysqli_query($con,$q);
echo "<center><table border=1 cellspacing=10 cellpadding=10>";
echo "<tr><td>Book ID</td><td>Book Name</td><td>Author</td><td>ISBN</td><td>Publisher</td>
<td>Publication Year</td>
<td>Pages</td>
<td>Book Type</td>
</tr>";
while($r=mysqli_fetch_array($rs))
{
    echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td>
<td>$r[6]</td>
<td>$r[7]</td>
</tr>";

}
}
else{
echo"Database connection unsuccessful" +mysqli_connect_error();
}
?>