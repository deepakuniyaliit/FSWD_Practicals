<?php
$user ='root';
$password ='';
$db='bookstore';
$con=mysqli_connect("localhost",$user,$password,$db);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$res = mysqli_query($con,"SELECT * FROM red");

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

while($row = mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>" . $row['bookname'] . "</td>";
echo "<td>" . $row['authorname'] . "</td>";
echo "<td>" . $row['isbnno'] . "</td>";
echo "<td>" . $row['noofpages'] . "</td>";
echo "<td>" . $row['publishername'] . "</td>";
echo "<td>" . $row['publicationyear'] . "</td>";
echo "<td>" . $row['booktype'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
