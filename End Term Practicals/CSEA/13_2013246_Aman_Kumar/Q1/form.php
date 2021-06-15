<?php
include 'configuration.php';

if(isset($_POST["submit"])){

	$bn=$_POST["bn"];
	$an=$_POST["an"];
	$in=$_POST["in"];
	$pn=$_POST["pn"];
	$y=$_POST["year"];
	$np=$_POST["no"];
	$t=$_POST["type"];

    $sql = "INSERT INTO `bookstore` ( `bookname`, `author`, `isbn`, `publisher`, `year`,`pages`,`type`) VALUES ( '$bn', '$an', '$in', '$pn', '$y','$np','$t')";
	mysqli_query($conn,$sql);
} 
?>
<html>
<head>
	<title>FORM</title>
	<style>
		h2{
			text-align: center;
			color: purple;
		}
		body>table:last-child{
			border:3px solid green;
			border-collapse: collapse;
		}
		th{
			color: red;
		}
		#submit{
			color: white;
			background-color: skyblue;
			width: 200px
		}
	</style>
</head>
<body>
<h2>Please Enter Your Details</h2>
<form method="POST" action="form.php">
<table  align="center"  cellspacing=" 25">
	<tr>
		<th>Book Name*</th>
		<td><input type="text" placeholder="Book Name" style="width: 395px" name="bn" required></td>
	</tr>
	<tr>
		<th>Author Name*</th>
		<td><input type="text" placeholder="Author Name" style="width: 395px " name="an" required></td>
	</tr>
	<tr>
		<th>ISBN No*</th>
		<td><input type="text" placeholder="ISBN Number" style="width: 395px" name="in"   required></td>
	</tr>
	<tr>
		<th>Publisher Name*</th>
		<td><input type="text" placeholder="Publisher Name" style="width: 395px " name="pn" required></td>
	</tr>
    <tr>
		<th>Publication Year*</th>
		<td><select style="width: 403px" name="year">
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
	    </select></td>
	</tr>
	<tr>
		<th>No Of Pages*</th>
		<td><input type="Number" placeholder="No Of pages" style="width: 395px" name="no"  max="400" min="300" required></td>
	</tr>
	<tr>
		<th>Book Type*</th>
		<td style="color: grey">
		<input type="radio" name="type" value="Action" checked>Action
		<input type="radio" name="type" value="Adventure">Adventure
		<input type="radio" name="type" value="Classics">Classics
		<input type="radio" name="type" value="Comic Book">Comic Book
		<input type="radio" name="type" value="Graphic Novel">Graphic Novel
		<input type="radio" name="type" value="Detective">Detective
		<input type="radio" name="type" value="Mystery">Mystery
		<input type="radio" name="type" value="Historical Fiction">Historical Fiction
		<input type="radio" name="type" value="Horror">Horror
		<input type="radio" name="type" value="Literary Fiction">Literary Fiction</td>
	</tr>

	<tr>
		<td></td>
		<td><input id="submit" type="submit"  value="submit" name="submit"></td>
	</tr>
</table>
</form>
</body>
</html>
