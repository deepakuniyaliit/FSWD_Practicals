<?php

// Username is root
$user = 'root';
$password = '';

$database = 'userdata';

// Server is localhost 
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM userdata";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>FSWD Ambika Bansal</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>BOOK DATA RETREIVED</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>Book ID</th>
				<th>Book Name</th>
				<th>Author</th>
				<th>ISBN</th>
                <th>Publisher</th>
                <th>Publication Year</th>
                <th>Pages</th>
                <th>Book Type</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_array())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
                <td><?php echo $rows[0];?></td>
                <td><?php echo $rows[1];?></td>
                <td><?php echo $rows[2];?></td>
                <td><?php echo $rows[3];?></td>
                <td><?php echo $rows[4];?></td>
                <td><?php echo $rows[5];?></td>
                <td><?php echo $rows[6];?></td>
				<td><?php echo $rows[7];?></td>

			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>