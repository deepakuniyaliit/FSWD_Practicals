<?php
include_once('config.php');
?>
<?php
    if(isset($_POST['submit'])){
    $bookname = $_POST['bname'];
    $authorname = $_POST['aname'];
    $isbn = $_POST['isbn'];
    $pubname = $_POST['pname'];
    $pubyear = $_POST['pyear'];
    $booktype = $_POST['btype'];
    $no = $_POST['volume'];

    $sql = "INSERT INTO `books` (Book_name, Author_name, ISBN_number, Pub_name,Pub_year,Book_type,Pages)
    VALUES ('$bookname', '$authorname', '$isbn', '$pubname','$pubyear','$booktype','$no')";
        
    if(mysqli_query($conn, $sql)){
        echo 'Data inserted successfully...';
        // header("Location:details.php");
    }
        else{
            echo 'Data insertion failed...'.mysqli_error($conn) ;
        }
}
else{
    echo "Please go back to Input Page.";
}
?>