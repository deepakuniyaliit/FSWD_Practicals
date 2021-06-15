<?php
    include('Templates/layout.html');
    include('Templates/form.html');

    if(isset($_POST['submit'])){   
        $book = $_POST['book'];
        $author = $_POST['author'];
        $isbn = $_POST['isbn'];
        $publisher = $_POST['publisher'];
        $gender = $_POST['pages'];
        $booktype = $_POST['booktype'];
        $p_year = $_POST['year'];

        include('config.php');
        // $insert_data = "INSERT INTO `users` (`username`, `email`, `contact`, `gender`, `city`) VALUES ('$username', '$email', '$contact', '$gender', '$city' );";
        $insert_data = "INSERT INTO `data` (`id`, `book`, `author`, `isbn`, `publisher`, `publication_year`, `pages`, `book_type`) VALUES (NULL, '$book', '$author', '$isbn', '$publisher', '$gender', '$booktype', '$year');";
        if(!mysqli_query($conn, $insert_data)){
            echo '<div style="color:red;position:absolute; top: 60px; left:600;">Data Insertion Failed !</div>';
        }
        else{
            echo '<div style="color:red;position:absolute; top: 60px; left:600;">Data Inserted Successfully !</div>';
        }    
    }
?>