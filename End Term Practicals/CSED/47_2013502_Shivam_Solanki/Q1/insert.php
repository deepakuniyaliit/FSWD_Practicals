<?php require_once("config.php"); ?>

<!DOCTYPE html>

<html>
    <body>
        <?php
            if(isset($_POST['submit'])){
                $BookID = $_POST['BookID'];
                $BookName = $_POST['BookName'];
                $Author=$_POST['Author'];
                $ISBN = $_POST['ISBN'];
                $Publisher = $_POST['Publisher'];
                $PublicationYear = $_POST['PublicationYear'];
                $Pages = $_POST['Pages'];
                $BookType = $_POST['BookType'];

                $sql = "INSERT INTO detail (BookID, BookName,Author,ISBN,Publisher,PublicationYear,Pages,BookType) VALUES ($BookId', '$BookName','$Author' '$ISBN', '$Publisher','$PublicationYear','$Pages','$BookType')";

                if (!(mysqli_query($conn, $sql))) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        ?>
    </body>
</html>