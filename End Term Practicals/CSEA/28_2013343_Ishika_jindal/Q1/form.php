<?php
include_once('config.php');
?>
<?php
if(isset($_POST['submit'])){
    $bookname = $_POST['bookname'];
    $authorname = $_POST['authorname'];
    $isbnnumber = $_POST['isbnnumber'];
    $publishername = $_POST['publishername'];
    $publicationyear = $_POST['Year'];
    $noofpages = $_POST['noofpages'];
    $booktype = $_POST['booktype'];

    $sql = "INSERT INTO `books` (`book_id`, 'book_name', 'author', 'isbn',
    'publisher', 'pub_year', 'pages', 'book_type') VALUES (NULL, '$bookname', '$authorname', '$isbnnumber', '$publishername','$publicationyear',
    '$noofpages','$booktype')";
    mysqli_query($conn,$sql);
}
else{
    echo "please click submit button";
}

?>
<html>
    <head>
        <title>Form Data on Table</title>
    </head>
    <body>
    <form action="add.php" method="POST">
        Enter Book Name:<input type="text" name="bookname"><br>
        Enter author name: <input type="text" name="authorname"><br>
        Enter ISBN Number: <input type="text"name="isbnnumber"><br>
        Enter Publisher Name: <input type="text" name="publishername"><br>
        Enter Publication Year: <select name="Year" id="">
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
        Number of pages: <input type="number" min="200" max="400" name="noofpages"><br>
        <input type="radio" id="action" name="booktype" value="action">
        <label for="action">Action</label><br>
        <input type="radio" id="adventure" name="booktype" value="adventure">
        <label for="adventure">Adventure</label><br>
        <input type="radio" id="classics" name="booktype" value="classics">
        <label for="classics">Classics</label><br>
        <input type="radio" id="comicbook" name="booktype" value="comicbook">
        <label for="comicbook">Comic Book</label><br>
        <input type="radio" id="thriller" name="booktype" value="thriller">
        <label for="thriller">Thriller</label><br>
        <input type="radio" id="detective" name="booktype" value="detective">
        <label for="detective">Detective</label><br>
        <input type="radio" id="mystery" name="booktype" value="mystery">
        <label for="mystery">Mystery</label><br>
        <input type="radio" id="horror" name="booktype" value="horror">
        <label for="horror">Horror</label><br>
        <input type="radio" id="poetic" name="booktype" value="Poems">
        <label for="Poems">Poems</label><br>
		 <br><input type="submit" name="Submit" value="submit">
    </form>
    </body>
</html>

