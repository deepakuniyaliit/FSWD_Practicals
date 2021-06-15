<?php require_once("config.php"); ?>

<!DOCTYPE html>

<html>
    <body>
        <?php
            if(isset($_POST['submit'])){
                $BookID = $_POST['Book ID'];
                $BookName = $_POST['Book Name'];
                $Author=$_POST['Author'];
                $ISBN = $_POST['ISBN'];
                $Publisher = $_POST['Publisher'];
                $PublicationYear = $_POST['Publication Year'];
                $Pages = $_POST['Pages'];
                $BookType = $_POST['Book Type'];

                $sql = "INSERT INTO detail (BookID, BookName,Author,ISBN,Publisher,PublicationYear,Pages,BookType) VALUES ($BookId', '$BookName','$Author' '$ISBN', '$Publisher','$PublicationYear','$Pages','$BookType')";

                if (!(mysqli_query($conn, $sql))) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        ?>
    </body>
</html>