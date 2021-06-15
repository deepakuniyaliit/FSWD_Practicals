<html>
<head>
	<title>Q1</title>
</head>
<body>
<form method="POST" action="$_SERVER['PHP_SELF']">
	Book Name:<input type="text" name="txt1"><br>
	Author Name:<input type="text" name="txt2"><br>
	isbn Number: <input type="text" name="txt3"><br>
	Publisher Name: <input type="text" name="txt4"><br>
	Publication Year: <select name="sel">
		<option>2010</option>
		<option>2011</option>
		<option>2012</option>
		<option>2013</option>
		<option>2014</option>
		<option>2015</option>
		<option>2016</option>
		<option>2017</option>
		<option>2018</option>
		<option>2019</option>
		<option>2020</option>
		<option>2021</option>
	</select>
	Number of Pages: <input type="Number" name="num" min="200" max="400"><br>
	Book Type: <input type="radio" name="rad" value="Action"> Action <input type="radio" name="rad" value="Adventure"> Adventure <input type="radio" name="rad" value="Classics"> Classics <input type="radio" name="rad" value="Comic Book"> Comic Book <input type="radio" name="rad" value="Graphic Novel"> Graphic Novel <input type="radio" name="rad" value="Detective"> Detective <input type="radio" name="rad" value="Mystery"> Mystery <input type="radio" name="rad" value="Historical Fiction"> Historical Fiction <input type="radio" name="rad" value="Horror"> Horror <input type="radio" name="rad" value="Literary Fiction"> Literary Fiction<br>
	<input type="submit" name="submit">
</form>
</body>
<?php
$servername = "localhost";
$username = "username";
$password = "password";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE BookStore (
Book_Name VARCHAR(50),
Author_name VARCHAR(50),
ISBN_No VARCHAR(30) NOT NULL,
Publisher_Name VARCHAR(50),
Publication_Year INT(4),
No_of_Pages INT(3),
Book_Type VARCHAR(30)
)";
if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$enter="INSERT INTO BookStore (Book_Name, Author_name , ISBN_No,  Publisher_Name, Publication_Year, No_of_Pages, Book_Type)
VALUES ($_POST['txt1'],$_POST['txt2'],$_POST['txt3'],$_POST['txt4'],$_POST['sel'],$_POST['num'],$_POST['rad'])";
if ($conn->query($enter) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</html>