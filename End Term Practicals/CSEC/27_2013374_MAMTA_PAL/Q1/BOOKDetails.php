<?php
require_once('config.php');
if(isset($_POST['Submit'])){
$bookname=$_POST["BookName"];
$authorname=$_POST["AuthorName"];
$BnNumber=$_POST["BnNumber"];
$publisherName=$_POST["PublisherName"];
$NoofPages=$_POST["noofpages"];
$PublisherYear=$_POST["publishYear"];
$booktype=$_POST["booktype"]
$sql="INSERT INTO `bookdetails`(`bookid`,`bookname`, `authorname`, `bnnumber`, `publishername`, `publicationyear`, `noofpages`, `booktype`) VALUES ('Null','$bookname','$authorname','$BnNumber','$publisherName','$PublisherYear','$NoofPages','$booktype')";

mysqli_query($conn,$sql);
}
else
{
    echo "Please Submit Form";
}
?>



<!DOCTYPE html>
<html>
    <head>
        <form method="POST" action="BookDetails.php" >
            Book Name : <input type="text" name="BookName" required><br>
            Author Name:<input type="text" name="AuthorName" required><br>
            BnNumber :<input type="text" name="BnNumber" required><br>
            Publisher Name:<input type="text" name="PublisherName" required><br>
            No of Pages : <input type="number" name="noofpages" min="200" max="400"><br>
           
            <br><br>
            Publish Year:<select name="publishYear">
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            </select> <br>
           Book Type: 
                  <input type="radio"  name="booktype" value="Action">Action<br>
                  <input type="radio"  name="booktype" value="adventure">adventure<br>
                  <input type="radio"  name="booktype"  value="classics">classic<br>
                  <input type="radio"  name="booktype"  value="comic">Comic<br>
                  <input type="radio"  name="booktype" value="Graphic Nobel">Graphic Nobel<br>
                  <input type="radio"  name="booktype"  value="Detective">Detective<br>
                  <input type="radio"  name="booktype" value="Mystery">Mystery<br>
                  <input type="radio"  name="booktype" value="Historical Fiction">other<br>
                  <input type="radio"  name="booktype" value="Horror">Horror<br>
                  <input type="radio"  name="booktype" value="Literary Fiction">Literary Fiction<br>

                   

          
            <input type="submit" name="Submit">
        </form>
    </head>
</html>

