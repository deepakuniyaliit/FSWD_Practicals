 
<?php
include('config.php');
?>

<?php
    $sql = "SELECT * FROM `Bookstore`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows>0){
    ?>

    <table border="1px">
		<thead>
			<tr>
				<th>Bookname</th>
				<th>Authorname</th>
				<th>isbn</th>
				<th>Publishername</th>
				<th>Noofpages</th>
				<th>Booktype</th>
				<th>Publicationyear</th>
			</tr>
		</thead>
		<tbody>
			
            <?php
			while($row = $result->fetch_assoc()){?>
			<tr>
				<td><?php echo $row['Bookname']?></td>
				<td><?php echo $row['Authorname']?></td>
				<td><?php echo $row['isbn']?></td>
				<td><?php echo $row['Publishername']?></td>
				<td><?php echo $row['Noofpages']?></td>
				<td><?php echo $row['Booktype']?></td>
				<td><?php echo $row['Publicationyear']?></td>
            </tr>
           <?php } ?>
		</tbody>
	</table>
<?php    }
?>
<html>
    <head>
        <title>Bookstore Details</title>
    </head>

</html>