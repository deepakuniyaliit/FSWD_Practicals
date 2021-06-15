<?php
        $conn = mysqli_connect("localhost", "root", "", "BookStore");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
       
        $bookName =  $_REQUEST['bookName'];
        $authorName = $_REQUEST['authorName'];
        $isbnNumber =  $_REQUEST['isbnNumber'];
        $publisherName = $_REQUEST['publisherName'];
        $publicationYear = $_REQUEST['publicationYear'];
        $noOfPages =  $_REQUEST['noOfPages'];
        $bookType =  $_REQUEST['bookName'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO cbooks  VALUES ('$bookName', 
            '$authorName','$isbnNumber','$publisherName','$publicationYear' ,'$noOfPages' ,'$bookName' )";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>"; 
  
        } else{
            echo "ERROR: Data Not Send $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>