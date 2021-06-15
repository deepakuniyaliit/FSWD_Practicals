<?php
include_once('config.php');
?>
<?php
if(isset($_POST['submit'])){
    $bookname = $_POST['bookname'];
    $authorname = $_POST['authorname'];
    $isbnnumber = $_POST['isbnnumber'];
    $publishername = $_POST['publishername'];
    $publicationyear = $_POST['publicationYear'];
    $noofpages = $_POST['noofpages'];
    $booktype = $_POST['booktype'];

    $sql = "INSERT INTO `books` (`id`, `bookName`, `authorName`, `isbnNumber`, `publisherName`, `publicationYear`, `noOfPages`, `bookType`) VALUES (NULL, '$bookname', '$authorname', '$isbnnumber', '$publishername','$publicationyear','$noofpages','$booktype')";
    mysqli_query($conn,$sql);
}
else{
    echo "please click submit button";
}

?>
<html>
    <head>
        <title>Form Data on Table</title>
    </head>
    <body>
    <form method="Post" action="add.php">
			<table>
				<tr>
					<td>Book Name: </td>
					<td><input type="text" name="bookname"</td>
				</tr>
				<tr>
					<td>Author Name: </td>
					<td><input type="text" name="authorname"</td>
				</tr>
				<tr>
					<td>ISBN Number: </td>
					<td><input type="number" name="isbnnumber"</td>
				</tr>
				<tr>
					<td>Publisher Name: </td>
					<td><input type="text" name="publishername"</td>
				</tr>
				<tr>
					<td>Publisher Year: </td>
					<td><input type="date" size="30" name="Year" class="slog1" min="2010-01-01"
									 max="2021-01-01"/></td>
				</tr>
				<tr>
					<td>Number of Pages: </td>
					<td><input type="text" name="noofpages"</td>
				</tr>
				<tr>
					<td>Book Type: </td>
					<td><input type="radio" name="booktype" value="action"/>Action</td>
					<td><input type="radio" name="booktype" value=""/>Adventure</td>
					<td><input type="radio" name="booktype" value=""/>Classic</td>
					<td><input type="radio" name="booktype" value=""/>Comic Book</td>
					<td><input type="radio" name="booktype" value=""/>Graphic Novel</td>
					<td><input type="radio" name="booktype" value=""/>Detective</td>
					<td><input type="radio" name="booktype" value=""/>Mystery</td>
					<td><input type="radio" name="booktype" value=""/>Historical Fiction</td>
					<td><input type="radio" name="booktype" value=""/>Horror</td>
					<td><input type="radio" name="booktype" value=""/>Literacy Fiction</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"</td>
				</tr>
				
			</table>
		</form>
    </body>
</html>

