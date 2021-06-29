
<?php
include 'config.php';

	$sql="select * from bookstore";
	$res=mysqli_query($conn,$sql); 
?>
<html>
<head>
	<title>FORM</title>
	
</head>
<body>
<?php if( $res->num_rows >0):?>
<h2>Check Your Details</h2>

	<table  align="center" cellpadding="10" >
			<tr >
				<th >Book ID</th>
				<th >Book Name</th>
				<th >Author</th>
				<th>ISBN</th>
				<th >Publisher</th>
				<th >Publication Year</th>
				<th >Pages</th>
				<th >Book Type</th>
			</tr>
			<?php while ( $row=mysqli_fetch_array($res)): ?>
			<tr >
               <td ><?php echo $row['bookid'] ?></td>
			   <td ><?php echo $row['bookname'] ?></td>
			   <td ><?php echo $row['AuthorName'] ?></td>
			   <td ><?php echo $row['isbnNumber'] ?></td>
			   <td ><?php echo $row['publisherName'] ?></td>
			   <td ><?php echo $row['year'] ?></td>
			   <td ><?php echo $row['pages'] ?></td>
			   <td ><?php echo $row['bookType'] ?></td>
			  </td>
			</tr>
		<?php endwhile;?>
	</table>
<?php endif;?>
</body>
</html>