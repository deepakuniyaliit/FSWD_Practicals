<?php
$insert=true;
if(isset($_POST['username'])){
  //set connection
  $server="localhost";
  $username1="root";
  $password="";

//create database
  $con=mysqli_connect($server,$username1,$password);
  //check for connection purpose
  if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
  }

  //collect post variables
$bookName=$_POST['bookName'];
$authorName=$_POST['authorName'];
$isbnNumber=$_POST['isbnNumber'];
$publisherName=$_POST['publisherName'];
$publicationYear=$_POST['publicationYear'];
$noOfPages=$_POST['noOfPages'];
$bookType=$_POST['bookType'];
  $sql="INSERT INTO `info`.`info` ( `bookName`, `authorName`, `isbnNumber`, `publisherName`, `publicationYear`, `noOfPages`,`bookType`)
  VALUES ( '$bookName', '$authorName', '$isbnNumber', '$publisherName', '$publicationYear','noOfPages ','bookType ', current_timestamp());";
//execute the query
  if($con->query($sql)==true){
  $insert=true;
  }
  else{
    echo "ERROR:$sql <br> $con->error";
  }
  $con->close();
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <title>Q2.</title>
 </head>
 <body>
    <?php
    if($insert==true){
echo "<p>Thanks</p>";
}?>
    <form action="index.php" method="post">
        <label for="bookName" class="form-label">Bookname: </label><br>
        <input type="text" name="bookName" id="fname" class="form-control" placeholder="bookName"><br>

        <label for="authorName" class="form-label">authorName: </label><br>
        <input type="text" name="authorName" id="fname" class="form-control" placeholder="authorName"><br>
  <label for="isbnNumber" class="form-label">isbnNumber: </label><br>
    <input type="text" name="isbnNumber" class="form-control" placeholder="isbnNumber"><br>


      <label for="publisherName" class="form-label">publisherName: </label><br>
      <input type="text" name="publisherName" class="form-control" placeholder="publisherName"><br>

      <label for="publicationYear" class="form-label">publicationYear: </label><br>
<select name="publicationYear" class="year" id="yearId">
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
</select><br >



      <label for="noOfPages" class="form-label">noOfPages: </label><br>
      <input type="range" name="volume" min="200" max="400" class="form-control" placeholder="noOfPages"><br>

     
<label for="bookType">Actions</label><br>
<input type="radio" id="bookType" name="bookType" value="Actions">
<label for="bookType">Adventure</label><br>
<input type="radio" id="bookType" name="bookType" value="Adventure">
<label for="bookType">Classics</label><br>
<input type="radio" id="bookType" name="bookType" value="Classics">
<label for="bookType">Comics</label><br>
<input type="radio" id="bookType" name="bookType" value="Comics">
<label for="bookType">Graphic Novel</label><br>
<input type="radio" id="bookType" name="bookType" value="Graphic Novel">
<label for="bookType">Detective</label><br>
<input type="radio" id="bookType" name="bookType" value="Detective">
<label for="bookType">Mystery</label><br>
<input type="radio" id="bookType" name="bookType" value="Mystery">
<label for="bookType">Historical</label><br>
<input type="radio" id="bookType" name="bookType" value="Historical">
<label for="bookType">Fiction</label><br>
<input type="radio" id="bookType" name="bookType" value="Fiction">
<label for="bookType">Horror</label><br>
<input type="radio" id="bookType" name="bookType" value="Horror">
<label for="bookType">Litery</label><br>
<input type="radio" id="bookType" name="bookType" value="Litery">
<label for="bookType">Fiction</label><br>
<input type="radio" id="bookType" name="bookType" value="Fiction">

<br>
<br ><button type="submit" class="btn btn-primary" >submit</button>
    </form>
    </div>
 </body>
 </html>