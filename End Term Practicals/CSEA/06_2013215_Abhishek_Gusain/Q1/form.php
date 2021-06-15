<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $book = $_POST['book'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $publisher = $_POST['publisher'];
    $pages = $_POST['pages'];
    $booktype = $_POST['booktype'];
    $year = $_POST['year'];
    

    $sql = "INSERT INTO `users` (`book`,`author`, `isbn`, `publisher`, `pages`, `booktype`, `year`) VALUES ('$book','$author', '$isbn', '$publisher', '$pages','$booktype','$year')";
    mysqli_query($conn, $sql);
}
else
{
    echo "Details need to be added before submitting form";
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRACTICALS</title>
</head>

    <body>
        <form method="POST" action="form.html">
            Book Name   : <input type="text" name="book" placeholder="Enter Book name" required><br>
            Author Name : <input type="text" name="author" placeholder="Enter Author Name" required ><br>
            ISBN Number : <input type="text" name="isbn" placeholder="Enter ISBN number" required ><br>
            Publisher Name : <input type="text" name="publisher" placeholder="Enter Publisher name" required ><br>
            No of Pages : <input type="number" name="pages" placeholder="Enter total pages" min="200" max="400" required ><br>

            Booktype  : Action    <input type="radio" name="booktype" value="action" required>
                        Adventure <input type="radio" name="booktype" value="adventure" required>
                        Classic   <input type="radio" name="booktype" value="classic" required>
                        Comic     <input type="radio" name="booktype" value="comic" required>
                        Graphic   <input type="radio" name="booktype" value="graphic" required>
                        Detective <input type="radio" name="booktype" value="detective" required>
                        Mystery   <input type="radio" name="booktype" value="mystery" required>
                        Historical<input type="radio" name="booktype" value="historical" required>
                        Horror    <input type="radio" name="booktype" value="horror" required>
                        Litrery   <input type="radio" name="booktype" value="litrery" required><br>
                    
            Publication Year :
                        <select name="year">
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
                    </select> <br>

        <input type="submit" name="submit" >
       
    </form>
</body>
</html>