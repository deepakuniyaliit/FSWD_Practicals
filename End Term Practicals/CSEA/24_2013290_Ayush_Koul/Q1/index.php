<?php
include_once('config.php');
?>

<?php
if (isset($_POST['submit'])) {
	$bname = $_POST['bookName'];
	$aname = $_POST['authorName'];
	$isbn = $_POST['isbn'];
	$pname = $_POST['publisherName'];
	$pyr = $_POST['publicationYear'];
	$pgs = $_POST['noOfPages'];
	$btype = $_POST['bookType'];

	$sql = "INSERT INTO `books` (`BookName`, `Author`, `ISBN`, `Publisher`, `PublicationYear`, `Pages`, `BookType`) VALUES ('$bname', '$aname', '$isbn', '$pname', '$pyr', '$pgs', '$btype')";
	if(mysqli_query($conn, $sql))
		echo "Data Inserted Successfully";
	else
		echo "Data Insertion Failed";
	
} else {
	echo "Please click submit button to submit the data..";
}
?>

<html>

<head>
	<title>Add Entry</title>
	<style>
		table,
		td,
		th {
			border-collapse: collapse;
			border: solid black 2px;
			padding: 10px;
		}
	</style>
</head>

<body>
	<form action="index.php" method="post" autocomplete="on">
		<table>
			<tr>
				<td>Book Name</td>
				<td><input type="text" name="bookName" id="bookName" placeholder="Enter Book Name" autocomplete="on"></td>
			</tr>

			<tr>
				<td>Author Name</td>
				<td><input type="text" name="authorName" id="authorName" placeholder="Enter Author Name" autocomplete="on"></td>
			</tr>

			<tr>
				<td>ISBN Number</td>
				<td><input type="text" name="isbn" id="isbn" placeholder="Enter isbn" autocomplete="on"></td>
			</tr>

			<tr>
				<td>Publisher Name</td>
				<td><input type="text" name="publisherName" id="publisherName" placeholder="Enter Publisher Name" autocomplete="on"></td>
			</tr>

			<tr>
				<td>Publication Year</td>
				<td>
					<select name="publicationYear" id="publicationYear">
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Number of Pages</td>
				<td><input type="number" name="noOfPages" id="noOfPages" min="200" max="400"></td>
			</tr>

			<tr>
				<td>Book Type</td>
				<td>
					<input type="radio" id="Action" name="bookType" value="Action">Action<br>
					<input type="radio" id="Adventure" name="bookType" value="Adventure">Adventure<br>
					<input type="radio" id="Classics" name="bookType" value="Classics">Classics<br>
					<input type="radio" id="Comic Book" name="bookType" value="Comic Book">Comic Book<br>
					<input type="radio" id="Graphic Novel" name="bookType" value="Graphic Novel">Graphic Novel<br>
					<input type="radio" id="Detective" name="bookType" value="Detective">Detective<br>
					<input type="radio" id="Mystery" name="bookType" value="Mystery">Mystery<br>
					<input type="radio" id="Historical Fiction" name="bookType" value="Historical Fiction">Historical Fiction<br>
					<input type="radio" id="Horror" name="bookType" value="Horror">Horror<br>
					<input type="radio" id="Literary Fiction" name="bookType" value="Literary Fiction">Literary Fiction<br>
				</td>
			</tr>
		</table>
		<br>
		<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>