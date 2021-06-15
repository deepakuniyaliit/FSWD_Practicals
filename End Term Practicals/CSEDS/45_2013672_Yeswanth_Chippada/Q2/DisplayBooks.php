<!DOCTYPE HTML>
<html>

<center><h2>Book Store</h2></center>
<br>

<?php
include("DBConnection.php");

$search = $_REQUEST["search"];

$query = "select ISBN,Title,Author,Edition,Publication from book_info where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{
?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> BOok id </th>
<th> Book Name </th>
<th> Author </th>
<th> ISBN </th>
<th> Publisher </th>
<th> Publication Year</th>
<th> Pages </th>
<th> BookType </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["Book id"];?> </td>
<td><?php echo $row["Book Name"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Publisher"];?> </td>
<td><?php echo $row["Publication Year"];?> </td>
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
<br>