<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $bname = $_POST['bname'];
     $aname = $_POST['aname'];
     $isbn = $_POST['isbn'];
     $pname = $_POST['pname'];
     $pyear = $_POST['pyear'];
     $pages = $_POST['pages'];
     $booktype = $_POST['booktype'];
     $sql = "INSERT INTO users (name,email,mobile)
     VALUES ('$bname','$aname','$isbn','$pname','$pyear','$pages','$booktype')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>