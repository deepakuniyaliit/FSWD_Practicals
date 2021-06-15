<?php 
include_once('connection.php'); 
$query="select * books"; 
$result=mysql_query($query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Book Record</h2></th> 
		</tr> 
			  <th> Book ID </th> 
			  <th> Book Name </th> 
			  <th> Author </th> 
			  <th> ISBN </th> 
              <th> Publisher </th> 
			  <th> Publication Year </th> 
			  <th> Pages </th> 
			  <th> Book Type </th> 
			  
			  
		</tr> 
		
		<?php while($rows=mysql_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows[' Book ID']; ?></td> 
		<td><?php echo $rows['Book Name']; ?></td> 
		<td><?php echo $rows['Author']; ?></td> 
		<td><?php echo $rows['ISBN ']; ?></td> 
        <td><?php echo $rows['Publisher']; ?></td> 
		<td><?php echo $rows['Publication Year']; ?></td> 
		<td><?php echo $rows['Pages']; ?></td> 
        <td><?php echo $rows['Book Type']; ?></td> 
        
		</tr> 
	<?php 
               } 
          ?> 