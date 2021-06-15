<?php
    require_once("./configuration.php");

    if(isset($_POST['submit']))
    {
        $bookName = $_POST['bookName'];
        $authorName = $_POST['authorName'];
        $isbnnum = $_POST['isbnnum'];
        $pubName = $_POST['pubName'];
        $pubYear = $_POST['pubYear'];
        $num_page = $_POST['num_page'];
        $book_type = $_POST['book_type'];
    }


    $query = "Insert into users (bookName,authorName,isbnnum,pubName,pubYear,num_page,book_type) values ('$bookName','$authorName','$isbnnum','$pubName','$pubYear','$num_page','$book_type')";

    $result = $mysql ->query($query);

    if($result == TRUE)
    {
        echo "New Records has been added";
    }
    else{
        echo "there is some error ".$query."<br>".$mysql->error;
    }
?>
<html>
    <head><title>Book Store</title></head>
    <body>
        <form method="post" action="">
        Book Name: <input type="text" name="bookName" id=""><br><br>
        Author Name: <input type="text" name="authorName" id=""><br><br>
        Is Bn Number: <input type="text" name="isbnnum" id=""><br><br>
        Publisher Name: <input type="text" name="pubName" id=""><br><br>
        Publication Year: <select name="city">
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
        <br><br>
        Number of Pages: <input type="number" name="num_page" id="" max="400" min="200"><br><br>
        Book type: 
        <input type="radio" name="book_type" value="Action">Action<br>
        <input type="radio" name="book_type" value="Adventure">Adventure<br>
        <input type="radio" name="book_type" value="Classics">Classics<br>
        <input type="radio" name="book_type" value="Comic Book">Comic Book<br>
        <input type="radio" name="book_type" value="Graph Novel">Graph Novel<br>
        <input type="radio" name="book_type" value="Detective">Detective<br>
        <input type="radio" name="book_type" value="Mystery">Mystery<br>
        <input type="radio" name="book_type" value="Historical Fiction">Historical Fiction<br>
        <input type="radio" name="book_type" value="Horror">Horror<br>
        <input type="radio" name="book_type" value="Literary Fiction">Literary Fiction<br>
        <input type="submit" name="submit" id=""><br><br>

        </form>
    </body>
</html>