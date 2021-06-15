<?php
    require_once('config.php');
    if(isset($_POST['submit'])){//Check if form has been submitted
        $name = $_POST['bookName'];
        $author = $_POST['authorName'];
        $isbn = $_POST['isbnNum'];
        $pub = $_POST['pubName'];
        $year = $_POST['pubYear'];
        $pages = $_POST['pages'];
        $type = $_POST['bookType'];
    }

    $sql = "INSERT INTO users (book_name, author_name, isbn_num, publisher_name, book_year, pages, book_type) VALUES ('$name', '$author', '$isbn', '$pub', '$year', '$pages', '$type')";

            if($mysqli->query($sql) == TRUE){
                echo 'Book Has Been Added Successfully...';
                echo "<br><a href='index.html'>Add another book</a>";
            }
            else{
                echo 'Error: '. $sql . "<br>" . $mysqli->error;
            }

?>