<?php
$hn="localhost";
$un="root";
$pass="";
$db="bookstore";
$conn=mysqli_connect($hn,$un,$pass,$db);
if($conn){echo "connection successful";}
else{echo "connection unsuccessful"+mysqli_connect_error();}

if(isset($_POST['submit']))
{   
   $book=$_POST['book'];
   $author=$_POST['author'];
   $isbn=$_POST['isbn'];
   $publisher=$_POST['publisher'];
   $pages=$_POST['pages'];
   $type=$_POST['type'];
   $year=$_POST['year'];
   $sql  = "INSERT INTO `books` (book, author,isbn, publisher, years,pages,types) 
    VALUES ('$book', '$author','$isbn', '$publisher','$year','$pages','$type')";
    if(mysqli_query($conn,$sql)){
        echo "values inserted successfully";
        header('location:details.php');
    }

}
?>
<html>
    <body>
    <form name="Form" action="form.php" method="POST" onsubmit="return func()">
        bookName:<input type="text"  name="book"  placeholder="Book" required  ><br>
        authorName:<input  type="text"  name="author" placeholder="Author" required><br>
        isbnNumber:<input type="text"  name="isbn" placeholder="ISBN" required ><br>
        publisherName:<input type="text"  name="publisher" placeholder="Publisher" required ><br>
        noOfPages:<input type="text"  name="pages" placeholder="Page Count" required ><br>

        bookType:Action<input type="radio" name="type" value="Action" >
        Adventure<input type="radio" name="type" value=" Adventure" >
        Classic<input type="radio" name="type" value="Classic" >
        ComicBook<input type="radio" name="type" value="ComicBook" >
        GraphicNovel<input type="radio" name="type" value="GraphicNovel" >
        Detective<input type="radio" name="type" value="Detective" >
        Mystery<input type="radio" name="type" value="Mystery" >
        HistoricalFiction<input type="radio" name="type" value="HistoricalFiction" >
        Horror<input type="radio" name="type" value="Horror" >
        LiteraryFiction<input type="radio" name="type" value="LiteraryFiction" ><br>
        
        publicationYear:<select name="year">
            <option >2010</option>
            <option >2011</option>
            <option >2012</option>
            <option >2013</option>
            <option >2014</option>
            <option>2015</option>
            <option >2016</option>
            <option >2017</option>
            <option >2018</option>
            <option >2019</option>
            <option >2020</option>
            <option >2021</option>
        </select><br>
        <input type="submit" name="submit" value="Submit Data">
    </form>
</body>
<script>
    function func()
    {   
        v1=document.forms["Form"]["pages"].value;
        v2=document.forms["Form"]["isbn"].value;
        x=parseInt(v1);
        if(v2.length==13)
        {
            return true;
        }
        else
        {
            alert("ISBN numbers should be 13 digits long");
            return false;
        }
        if(x>=200&&x<=400)
        {
            return true;
        }
        else{
            alert("pages must be in range of 200 to 400");
            return false;
        }
        


    }
    </script>

</html>