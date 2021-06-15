<?php include_once('database.php');?>

<?php
    if(isset($_POST['submit'])){
        $bookname = $_POST['bname'];
        $authorname = $_POST['aname'];
        $isbn = $_POST['isbn'];
        $pubname = $_POST['pname'];
        $pubyear = $_POST['pyear'];
        $no = $_POST['volume'];
        $booktype = $_POST['btype'];

        $sql = "INSERT INTO bookdetails (Book_Name, Author, ISBN, Publisher, Publication_Year,Pages, Book_Type)
        VALUES ('$bookname', '$authorname', '$isbn', '$pubname','$pubyear','$no', '$booktype')";
            
        if (!(mysqli_query($conn, $sql))) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>