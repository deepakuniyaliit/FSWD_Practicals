<?php
include('config1.php');
?>
<?php
$bookname = ''; 
$author = ''; 
$isbn = ''; 
$publisher = ''; 
$publicationyear = ''; 
$pages = ''; 
$booktype = ''; 
	if(isset($_POST['bookname'])){
		$bookname = $_POST['bookname'];
	}
	else{
		$bookname = ''; 
	}
	if (isset($_POST['author'])) {
		$author = $_POST['author'];
	}
	else{
		$author = ''; 
	}
	
    if (isset($_POST['isbn'])) {
		$isbn = $_POST['isbn'];
	}
	else{
        $isbn = '';  
	}


	if (isset($_POST['publisher'])) {
		$publisher = $_POST['publisher'];
	}
	else{
		$publisher = '';  
	}
	if (isset($_POST['publicationyear'])) {
		$publicationyear = $_POST['publicationyear'];
	}
	else{
		$publicationyear = '';   
    }
    if (isset($_POST['pages'])) {
		$pages = $_POST['pages'];
	}
	else{
        $pages = ''; 
    }

    if (isset($_POST['booktype'])) {
		$booktype = $_POST['booktype'];
	}
	else{
        $booktype = ''; 
    }
	
	if(isset($_POST['submit'])){
		
	
		 $sql1 = "INSERT INTO `book`(`id`, `bookname`, `author`, `isbn`, `publisher`, `pages`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])";
	
		mysqli_query($conn, $sql1);
        
	}
	else{
		echo "Please click submit button to submit the data..";
	}
?>


<table border="2" cellpadding = "8" align="top" >
	<tr>
		<td>BookName</td>
		<td>Author</td>
		<td>ISBN</td>
		<td>Publisher</td>
		<td>Publication Year</td>
		<td>Pages</td>
        <td>Book Type</td>
	</tr>
	<tr>
		<td><?php echo $bookname ?></td>
		<td><?php echo $author ?></td>
		<td><?php echo $isbn?></td>
		<td><?php echo $publisher ?></td>
		<td><?php echo $publicationyear ?></td>
        <td><?php echo $pages ?></td>
		<td><?php echo $booktype ?></td>
	</tr>
</table>
<form method="post">	
<table id = "form" align = "center" margin-top:50px border = "collapse" cellspacing = " 35" style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1))">
	
	<tr><td>BookName  <td><input type="text"   placeholder="Enter book Name" name = "BookName" required></td></tr>
	
    <tr><td>Author <td><input type="text" placeholder="Author name" name = "Author" required></td></tr>
    <tr><td>ISBN <td><input type="number" placeholder="ISBN number" name = "ISBN" required></td></tr>
    <tr><td>Publisher <td><input type="text" placeholder="Publisher name" name = "Publisher" required></td></tr>

    <!-- <tr><td>Publication Year <td><input type="text" placeholder="ISBN number" name = "" required></td></tr> -->
    <!-- <tr><td>Contact <td><input  type="contact"  minlength="10" maxlength="10"  placeholder="Enter Contact" name = "Contact"required></td></tr> -->
	
	<tr><td>Publication Year
		<td><select name = "publication year"required>
			<option>Select Year</option>
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
	</td></tr>

    <tr><td>Pages <td><input type="number" minlength="200" maxlength="400" placeholder="no of pages" name = "Pages" required></td></tr>



    <tr><td> Book Type<br>
    Action <input type="radio" name="booktype" value="Action" checked> 
    Adventure<input type="radio" name="booktype" value="Adventure" checked>
    classics <input type="radio" name="booktype" value="classics" checked>  
    Comic <input type="radio" name="booktype" value="comic" checked> 
    Graphic <input type="radio" name="booktype" value="graphic" checked> 
    Horror <input type="radio" name="booktype" value="horror" checked>  <br></td></tr>

	
	<tr><td>Submit ? <td><input type="Submit" name = "Sub"></td></tr>
</table>
</form>
