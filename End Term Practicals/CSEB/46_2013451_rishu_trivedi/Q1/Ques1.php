<?php
$servername = "localhost";
$username = "username";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="CREATE DATABASE Bookstore";
if(mysqli_query($con,$sql)){
echo "database created successfully";}
else
{
echo "error creating database:".mysqli_error($con);
}
?>
<html>
<head>
<title>form </title>
</head>
<body>
<form method="post">
<lable>Bookname:-</lable>
<input type="text" name="firstname" size="15"><br>
<lable>Authorname:-</lable>
<input type="text" name="authorname" size="15"><br>
<lable>Isbnnumber:-</lable>
<input type="text" name="isbnnumber" size="15"><br>
<lable>Publishername:-</lable>
<input type="text" name="publishername" size="15"><br>
<lable>Publisheryear:-</lable>
<select name="pyear">
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
</select><br>
<lable>Noofpages:-</lable>
<input type="number" name="noofpages" min="200" max="400"><br>
<lable>Booktype:-</lable>
<input type="radio" name="booktype" id="action"><lable for="action">Action</lable><br>
<input type="radio" name="booktype" id="adventure"><lable for="adventure">Adventure</lable><br>
<input type="radio" name="booktype" id="classics"><lable for="classics">classics</lable><br>
<input type="radio" name="booktype" id="comicbook"><lable for="comicbook">comicbook</lable><br>
<input type="radio" name="booktype" id="graphicnove"><lable for="graphicnove">graphicnovel</lable><br>
<input type="radio" name="booktype" id="detective"><lable for="detective">detective</lable><br>
<input type="radio" name="booktype" id="mystery"><lable for="mystery">mystery</lable><br>
<input type="radio" name="booktype" id="horror"><lable for="horror">horror</lable><br>
<input type="radio" name="booktype" id="literary fiction"><lable for="literary fiction">literary fiction</lable><br>
<input type="submit" value="submit">
</form>
</body>
