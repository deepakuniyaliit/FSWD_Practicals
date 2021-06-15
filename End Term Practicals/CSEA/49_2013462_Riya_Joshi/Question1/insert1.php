<?php include("database.php");
    if(isset($_POST['submit'])){
        $bookname = $_POST['bookname'];
        $authorName = $_POST['authorName'];
        $isbnNumber = $_POST['isbnNumber'];
        $publisherName = $_POST['publisherName'];
        $publisherYear = $_POST['publisherYear'];
        $noOfPages = $_POST['noOfPages'];
        $genre = $_POST['genre'];
        

        $sql = "INSERT INTO `Bookstore` (`Bookname`, `Authorname`, `isbn`, `Publishername`,`Noofpages`, `Booktype`, `Publicationyear`) VALUES ('$bookname', '$authorName', '$isbnNumber', '$publisherName','$noOfPages', '$genre', '$publisherYear')";
        mysqli_query($conn, $sql);
    }

        if(!(mysqli_query($conn,$sql))){
            echo "Error: " . $sql ."<br>" .mysqli_error($conn);
        }

    }
?>