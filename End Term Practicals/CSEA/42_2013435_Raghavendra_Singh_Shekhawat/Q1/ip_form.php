<?php
    include('Templates/layout.html');
    include('Templates/form.html');

    if(isset($_POST['submit'])){   
        $b_name = $_POST['b_name'];
        $a_name = $_POST['a_name'];
        $isbn = $_POST['isbn'];
        $publisher = $_POST['publisher'];
        $gender = $_POST['pages'];
        $b_type = $_POST['b_type'];
        $p_year = $_POST['p_year'];

        include('config.php');
        // $insert_data = "INSERT INTO `users` (`username`, `email`, `contact`, `gender`, `city`) VALUES ('$username', '$email', '$contact', '$gender', '$city' );";
        $insert_data = "INSERT INTO `data` (`id`, `b_name`, `author`, `isbn`, `publisher`, `publication_year`, `pages`, `book_type`) VALUES (NULL, '$b_name', '$a_name', '$isbn', '$publisher', '$gender', '$b_type', '$p_year');";
        if(!mysqli_query($conn, $insert_data)){
            echo '<div style="color:red;position:absolute; top: 60px; left:600;">Data Insertion Failed !</div>';
        }
        else{
            echo '<div style="color:red;position:absolute; top: 60px; left:600;">Data Inserted Successfully !</div>';
        }    
    }
?>