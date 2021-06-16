<?php
include_once('config.php');
?>
<?php
if(isset($_POST['submit'])){
	$f=$_POST['bname'];
	$l=$_POST['authname'];
	$u=$_POST['isbn'];
	$e=$_POST['pubname'];
	$p=$_POST['year'];
	$rp=$_POST['pages'];
	$g=$_POST['type'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'Bookstore');
	$q="insert into Bookdetails(BookName,AuthorName,isbnNumber,PublisherName,Year,No.OfPages,BookType)values('$f','$l','$u','$e','$p','$rp','$g')";
	mysqli_query($con,$q);
	mysqli_close($con);
	}
else{
	echo "please click submit button";
	}
?>

<html>
	<head>
		<title>HTML Form</title>
		<script>
			function formValidate(){
				var y = document.forms["FORM"]["pages"].value;
				if (y.length>=200 && y.length <= 400) {
					alert("length must be in between 200 and 400");
					return false;
					}
				}
		</script>
	</head>
	<body>
		<form method="Post" action="form.php">
			<table>
				<tr>
					<td>Book Name: </td>
					<td><input type="text" name="bname"</td>
				</tr>
				<tr>
					<td>Author Name: </td>
					<td><input type="text" name="authname"</td>
				</tr>
				<tr>
					<td>ISBN Number: </td>
					<td><input type="number" name="isbn"</td>
				</tr>
				<tr>
					<td>Publisher Name: </td>
					<td><input type="text" name="pubname"</td>
				</tr>
				<tr>
					<td>Publisher Year: </td>
					<td><input type="date" size="30" name="year"  min="2010-01-01"
									 max="2021-01-01"/></td>
				</tr>
				<tr>
					<td>Number of Pages: </td>
					<td><input type="text" name="pages"</td>
				</tr>
				<tr>
					<td>Book Type: </td>
					<td><input type="radio" name="type" value="action"/>Action</td>
					<td><input type="radio" name="type" value=""/>Adventure</td>
					<td><input type="radio" name="type" value=""/>Classic</td>
					<td><input type="radio" name="type" value=""/>Comic Book</td>
					<td><input type="radio" name="type" value=""/>Graphic Novel</td>
					<td><input type="radio" name="type" value=""/>Detective</td>
					<td><input type="radio" name="type" value=""/>Mystery</td>
					<td><input type="radio" name="type" value=""/>Historical Fiction</td>
					<td><input type="radio" name="type" value=""/>Horror</td>
					<td><input type="radio" name="type" value=""/>Literacy Fiction</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"</td>
				</tr>
				
			</table>
		</form>
	</body>
</html>