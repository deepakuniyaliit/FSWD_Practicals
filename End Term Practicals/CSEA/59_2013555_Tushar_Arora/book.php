<!DOCTYPE html>
<html>
    <head>
        <title>BookShop</title>
        <h1>Enter The Details</h1>
    </head>
<form method="POST">
<label>Book Name</label>
<input type="text" name="bookname" required>
<label>Author Name</label>
<input type="text" name="author" required>
<label>ISBN Number</label>
<input type="number" name="isbn" required>
<label>Publisher Name</label>
<input type="text" name="publisher" required>
<label>Publication Year</label>
<select  name="year">
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
<label>Number of pages</label>
<input type="range" name="pages"  min="200" max="400">
<label>Book Type</label>
<input type="radio" name="booktype">Action</input>
<input type="radio" name="booktype">Adventure</input>
<input type="radio" name="booktype">Classics</input>
<input type="radio" name="booktype">Comic Book </input>
<input type="radio" name="booktype">Graphic Novel</input>
<input type="radio" name="booktype">Detective</input>
<input type="radio" name="booktype">Mystery</input>
<input type="radio" name="booktype">Historical Fiction</input>
<input type="radio" name="booktype">Horror</input>
<input type="radio" name="booktype">Literary Fiction</input>
</form>

</html>



<?php
  
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "bookstore";
  

$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
  
$sqlquery = "INSERT INTO table VALUES 
    ('Tushar', 'Arora', 'tushararora14600@gmail.com')"
  
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





//Q2
<?php
include('book.php');
?>


<?php

    $sql="SELECT * FROM bookstore";
    $result=mysqli_query($conn, $sql);

    if($result!==false && $result->num_rows > 0){
    ?>

    <table border="1px">
        <thead>
            <tr>
              
                <th>Book Name</th>
                <th>Author</th>
                <th>ISBN NUMBER</th>
                <th>Publisher</th>
                <th>Publication Year</th>
                <th>Pages</th>
                <th>Book Type</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while($row = $result->fetch_array()){?>
            <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[4]?></td>
                <td><?php echo $row[5]?></td>
                <td><?php echo $row[6]?></td>
               
               

            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php  }
?>


<html>

<head>
    
    <title>User Details</title>
</head>
<body>
    
</body>
</html>
