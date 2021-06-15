
<?php
include('config.php');
?>

<?php
    if(isset($_POST['Submit']))
    {
        $bn = $_POST['bookname'];
        $author = $_POST['author'];
        $isbn = $_POST['isbn'];
        $pubname = $_POST['pubname'];
        $py = $_POST['py'];
        $pages = $_POST['pages'];
        $bt = $_POST['btype'];

        $sql = "INSERT INTO `books` (`Book Name`, `Author`, `ISBN`, `Publisher`,`Publication Year`,`Pages`,`Book Type`) VALUES ('$bn','$author', '$isbn', '$pubname', '$py','$pages','$bt')";
        mysqli_query($conn , $sql);
    
    }
    else{
        echo "Please click the submit button to submit data";
    }

?>



<html>
<head>
<title>ADDING MORE BOOKS</title>
</head>
    <body>
        <form method="POST" action="BookAdding.php">
        Book name : <input type="text" name="bookname" placeholder = "Type Bookname" required><br>
        Author's name : <input type="text" name="author" placeholder = "Type Auther's name" required><br>
        ISBN: <input type="text" name="isbn" placeholder = "Type Book's ISBN" required><br>
        Publisher's name : <input type="text" name="pubname" placeholder = "Type Publisher's name" required><br>

        Publication Year :
    <select id="py" name="py">
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value=2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
  </select><br>

    No. of pages: <input type="text" name="pages" placeholder = "Type Number of pages" required><br>
        Book Type:<br>
        <input type="radio" value = "Action" name="btype">Action<br>
        <input type="radio" value = "Adventure" name="btype">Adventure<br>
        <input type="radio" value = "Classics" name="btype">Classics<br>
        <input type="radio" value = "Comic Book" name="btype">Comic Book<br>
        <input type="radio" value = "Graphic Novel" name="btype">Graphic Novel<br>
        <input type="radio" value = "Detective" name="btype">Detective<br>
        <input type="radio" value = "Mystry" name="btype">Mystry<br>
        <input type="radio" value = "Historical Fiction" name="btype">Historical Fiction<br>
        <input type="radio" value = "Horror" name="btype">Horror<br>
        <input type="radio" value = "Literary Fiction" name="btype">Literary Fiction<br>

       
        <input type="submit" value="Submit" name="Submit">
    </form>

    </body>
</html>
