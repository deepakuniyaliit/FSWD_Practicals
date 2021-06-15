<?php
    require_once("./configuration.php");

    if(isset($_POST['submit']))
    {
        $book_name = $_POST['book_name'];
        $author_name = $_POST['author_name'];
        $isbnnum = $_POST['isbnnum'];
        $pub_name = $_POST['pub_name'];
        $pub_year = (int)$_POST['pub_year'];
        $num_page = $_POST['num_page'];
        $book_type = $_POST['book_type'];
    }


    $query = "Insert into users (book_name,author_name,isbnnum,pub_name,pub_year,num_page,book_type) values ('$book_name','$author_name','$isbnnum','$pub_name','$pub_year','$num_page','$book_type')";

    $result = $mysql ->query($query);

    if($result == TRUE)
    {
        echo "New Records has been added";
    }
    else{
        echo "There is some error ".$query."<br>".$mysql->error;
    }
?>