<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
</head>
<body>
	<form method="POST" action="store.php">
	Bookname<input type="text" name="bookName"  required><br>
	Authorname<input type="text" name="authorName" required><br>
	ISBN Number<input type=" text" name="isbnNumber" required><br>
	Publishername<input type=" text" name="publisherName" required><br>
	PublicationYear<select name="publicationYear">
		<option value="2010">2010</option>
		<option value="2011">2011</option>
		<option value="2012">2012</option>
		<option value="2013" >2013</option>
		<option value="2014">2014</option>
		<option value="2015">2015</option>
		<option value="2016">2016</option>
		<option value="2017" >2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
		<option value="2021">2021</option>
	</select><br>
	
Number of Pages<input type="Number" name="noOfPages" min="200" max="400" required>
<br>
BookType <br> 
    Action<input type="radio"  name="bookType" value="Action"><br>
	Adventure<input type="radio"  name="bookType" value="Adventure" ><br>
	Classics<input type="radio"  name="bookType" value="Classics"><br>
	Comic Book<input type="radio"  name="bookType" value="Comic Book" ><br>
	Graphic Novel<input type="radio"  name="bookType" value="Mystery"><br>
	Mystery<input type="radio"  name="bookType" value="Historical Fiction" ><br>
	Historical Fiction<input type="radio"  name="bookType" value="Action"><br>
	Horror<input type="radio"  name="bookType" value="Horror" ><br>
	Literary Fiction<input type="radio"  name="bookType" value="Literary Fiction"><br><br>
	
	<input type="submit" name="submit" value="Submit">
	
</form>
</body>
</html>

