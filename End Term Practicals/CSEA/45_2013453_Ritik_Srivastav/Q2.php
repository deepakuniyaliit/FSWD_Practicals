<html>
<body>
<br>

<?php
include("../Q1/configuration.php");

$query = "Select * from users";
$result = $mysql->query($query);

if($result->num_rows>0)
{
?>

<table border="0" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> Book Id</th>
<th> Book Name</th>
<th> Author</th>
<th> ISBN </th>
<th> Publisher</th>
<th> Publication Year</th>
<th> Pages</th>
<th> Book Type</th>


</tr>

<?php while($row = $mysql->fetch_assoc($result))
{
?>
<tr>

<td><?php echo $row["id"];?> </td>
<td><?php echo $row["book_name"];?> </td>
<td><?php echo $row["author_name"];?> </td>
<td><?php echo $row["isbnnum"];?> </td>
<td><?php echo $row["pub_name"];?> </td>
<td><?php echo $row["pub_year"];?> </td>
<td><?php echo $row["num_page"];?> </td>
<td><?php echo $row["book_type"];?> </td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>