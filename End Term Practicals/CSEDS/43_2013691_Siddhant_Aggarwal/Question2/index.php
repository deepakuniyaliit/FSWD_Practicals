<?php
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn, 'bookStore');
$q = "select * from books;";
$records = mysqli_query($conn, $q);
$row_num = mysqli_num_rows($records);
mysqli_close($conn);
    if($records!==false && $records->num_rows > 0){
    ?>

    <table border="2px">
        <thead>
            <tr>
                <th>BOOK ID</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Publisher</th>
                <th>Publiction Year</th>
                <th>Pages</th>
                <th>Book Type</th>

            </tr>
        </thead>
        <tbody>
        <?php 
	    $i;
	for($i=0;$i<$row_num;$i++)
	{
		$rows = mysqli_fetch_array($records);

	?>

	<tr>
		<td style="color:black;"><?php echo $rows['bookid']; ?></td>
		<td style="color:black;"><?php echo $rows['bookname']; ?></td>
		<td style="color:black;"><?php echo $rows['authorname']; ?></td>
		<td style="color:black;"><?php echo $rows['isbnnumber']; ?></td>
		<td style="color:black;"><?php echo $rows['publishername']; ?></td>
		<td style="color:black;"><?php echo $rows['publicationyear']; ?></td>
		<td style="color:black;"><?php echo $rows['noofpages']; ?></td>
		<td style="color:black;"><?php echo $rows['bookt']; ?></td>
	</tr>

	<?php
	}
	?>
        </tbody>
    </table>
<?php  }
?>


<html>

<head>  
    <title>Book Details</title>
</head>
<body>
    
</body>
</html>