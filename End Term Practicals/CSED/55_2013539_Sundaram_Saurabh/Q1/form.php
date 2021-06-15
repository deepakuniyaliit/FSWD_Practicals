<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $Bookname = $_POST['Bookname'];
    $Authorname = $_POST['Authorname'];
    $isbn = $_POST['isbn'];
    $Publishername = $_POST['Publishername'];
    $Noofpages = $_POST['noOfPages'];
    $Booktype = $_POST['btype'];
    $Publicationyear = $_POST['publicationYear'];


    $sql = "INSERT INTO `Bookstore` (`Bookname`, `Authorname`, `isbn`, `Publishername`,`Noofpages`, `Booktype`, `Publicationyear`) VALUES ('$Bookname', '$Authorname', '$isbn', '$Publishername','$Noofpages', '$Booktype', '$Publicationyear')";
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
<form method="POST" action="form.php">
    bookName: <input type="text" name="Bookname" placeholder="Type Bookname" required><br>
    authorName: <input type="text" name="Authorname" placeholder="Type Authorname" required><br>
    isbnNumber: <input type="text" name="isbn" placeholder="Type isbn" required><br>
    publisherName: <input type="text" name="Publishername" placeholder="Type Publishername" required><br>
    publicationYear: 
    <select name="publicationYear" id="publicationYear">
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
    noOfPages: <input type="range" id="noOfPages" min="200" max="400">
    <br>
    bookType: 
    <input type="radio" name="btype" value="Action" required/>Action
    <input type="radio" name="btype" value="Adventure" required/>Adventure
    <input type="radio" name="btype" value="Classics" required/>Classics
    <input type="radio" name="btype" value="Comic Book" required/>Comic Book
    <input type="radio" name="btype" value="Graphic Novel" required/>Graphic Novel
    <input type="radio" name="btype" value="Detective" required/>Detective
    <input type="radio" name="btype" value="Mystery" required/>Mystery
    <input type="radio" name="btype" value="Historical Fiction" required/>Historical Fiction
    <input type="radio" name="btype" value="Horror" required/>Horror
    <input type="radio" name="btype" value="Literary Fiction" required/>Literary Fiction 
    <br>
    Submit: <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>