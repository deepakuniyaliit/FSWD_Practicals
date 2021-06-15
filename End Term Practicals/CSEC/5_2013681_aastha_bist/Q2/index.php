<?php
$user ='root';
$password ='';
$db='bookstore';
$con=mysqli_connect("localhost",$user,$password,$db);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$res = mysqli_query($con,"SELECT * FROM rec");

echo "<table border='2'>
<tr>
<th>Book Name</th>
<th> Author Name</th>
<th> ISBN number</th>
<th> No of pages</th>
<th> Publisher name</th>
<th> Publication year</th>
<th>book type</th>
</tr>";

while($r = mysqli_fetch_array($res))
{
echo "<tr width=5vw>";
echo "<td>" . $r['bookname'] . "</td>";
echo "<td>" . $r['authorname'] . "</td>";
echo "<td>" . $r['isbnno'] . "</td>";
echo "<td>" . $r['noofpages'] . "</td>";
echo "<td>" . $r['publishername'] . "</td>";
echo "<td>" . $r['publicationyear'] . "</td>";
echo "<td>" . $r['booktype'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
