<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<br>

<?php
include("DBConnection.php");

$search = $_REQUEST["search"];

$query = "select Book ID,Book Name,Author,ISBN,Publisher,Pages,Book Type where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{
?>
<table border="0" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> Book Id</th>
<th> Book Name</th>
<th> Author</th>
<th> ISBN </th>
<th> Publisher</th>
<th> Pages</th>
<th> Book Type</th>
</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Book ID"];?> </td>
<td><?php echo $row["Book Name"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Publisher"];?> </td>
<td><?php echo $row["Pages"];?> </td>
<td><?php echo $row["Book Type"];?> </td>
</tr>

<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>

</table>
</body>
</html>
