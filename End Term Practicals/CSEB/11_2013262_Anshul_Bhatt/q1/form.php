<?php
include_once'config.php';
?>
<?php
if(isset($_POST['submit']))
{
    $bookname=$_POST['bookname'];
    $authorname=$_POST['authorname'];
    $isbnnumber=$_POST['isbnnumber'];
    $publishername=$_POST['publishername'];
    $publicationYear=$_POST['publicationYear'];
    $noofpages=$_POST['noofpages'];
    $booktype=$_POST['booktype'];
    $sql="INSERT INTO `users` (`id`, `bookname`, `authorname`, `isbnnumber`, `publishername`, `publicationYear`, `noofpages`, `booktype`) VALUES (NULL, '$bookname', '$authorname', '$isbnnumber', '$publishername','$publicationYear', '$noofpages', '$booktype')";
     mysqli_query($conn,$sql);
}
else{
   echo "please click on submit button ...";
}
?>

<html>
    <head>
        <title>Html form</title>
    </head>
    <body>
        <form method="POST" action="">
            <label >BookName</label><br>
            <input type="text" name="bookname" required><br>
            <label >AuthorName</label><br>
            <input type="text" name="authorname" required><br>
            <label >isbnNumber</label><br>
            <input type="number" name="isbnnumber" required><br>
            <label >PublisherName</label><br>
            <input type="text" name="publishername" required><br>
            <label >publicationYear</label><br>
            <select name="publicationYear" required>
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
            <label >noofPages</label><br>
            <input type="number" name="noofpages"><br>
            <label >bookType</label><br>
            <input type="radio" id="Action" name="booktype" value="Action" required>
<label for="Action">Action</label><br>
<input type="radio" id="Adventure"  name="booktype" value="Adventure" required>
<label for="Adventure">Adventure</label><br>
<input type="radio" id="Classics"  name="booktype" value="Classics" required>
<label for="Classics">Classics</label><br>
<input type="radio" id="Comicbook"  name="booktype" value="Comicbook" required>
<label for="Comicbook">Comicbook</label><br>
<input type="radio" id="Graphicnovel"  name="booktype" value="Graphicnovel" required>
<label for="Graphicnovel">Graphicnovel</label><br>
<input type="radio" id="Detective"  name="booktype" value="Detective" required>
<label for="Detective">Detective</label><br>
<input type="radio" id="Mystery"  name="booktype" value="Mystery" required>
<label for="Mystery">Mystery</label><br>
<input type="radio" id="Historicalfiction"  name="booktype" value="Historicalfiction" required>
<label for="Historicalfiction">Historicalfiction</label><br>
<input type="radio" id="Horror" name="booktype" value="Horror" required>
<label for="Horror">Horror</label><br>
<input type="radio" id="Literaryfiction"  name="booktype" value="Literaryfiction" required>
<label for="Literaryfiction">Literaryfiction</label><br>
<input type="submit" name="submit">
        </form>
    </body>
</html>