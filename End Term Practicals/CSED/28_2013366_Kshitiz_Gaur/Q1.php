<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $BookID = $_POST['Book ID'];
    $Bookname = $_POST['Book Name'];
    $Authorname = $_POST['Author'];
    $isbn = $_POST['ISBN'];
    $Publishername = $_POST['Publisher'];
    $Noofpages = $_POST['Publication Year'];
    $Booktype = $_POST['Pages'];
    $Publicationyear = $_POST['Book Type'];


    $sql = "INSERT INTO `Bookstore` (`Book ID`, `Book Name`, `Author`, `ISBN`,`Publisher`, `Publication Year`, `Pages`, 'Book Type') 
    VALUES ('$BookID', '$Bookname', '$Authorname', '$isbn', '$Publishername','$Noofpages', '$Booktype', '$Publicationyear')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>
<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="Q1.php">
    BookID <input type="text" name="BookID" placeholder="Type Book ID" required><br>
    Bookname <input type="text" name="Bookname" placeholder="Type Bookname" required><br>
    Authorname <input type="text" name="Authorname" placeholder="Type Authorname" required><br>
    isbn <input type="Number" name="isbn" placeholder="Type isbn" required><br>
    Publishername <input type="text" name="Publishername" placeholder="Type Publishername" required><br>
    Noofpages<input type="Number" name="Noofpages" placeholder="Type Noofpages" required><br>
     Booktype <input type="text" name="Booktype"> 
    Select Publicationyear <select name="Publicationyear">
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
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>