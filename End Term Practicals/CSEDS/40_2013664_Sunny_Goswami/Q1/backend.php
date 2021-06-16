<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "my_db";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
    if(isset($_POST['submit']))
    {    
            $Bname = $_POST['Bname'];
            $Aname = $_POST['Aname'];
            $isbn = $_POST['isbnNum'];
            $pname = $_POST['PName'];
            $year = $_POST['yearNum'];
            $npages = $_POST['numPages'];
            $btype = $_POST['btype'];
            
            $sql = "INSERT INTO BooksRecord (BookName,AuthorName, ISBN, PublisherName, Year, NumPages, Booktype)
            VALUES ('$Bname', $Aname, $isbn, $pname, $year, $npages, $btype)";

            if (mysqli_query($conn, $sql)) {
            echo "New record has been added successfully !";
            } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
            mysqli_close($conn);
    }
    
?>

