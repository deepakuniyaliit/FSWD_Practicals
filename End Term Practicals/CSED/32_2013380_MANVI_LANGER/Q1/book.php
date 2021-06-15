<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $Bookname = $_POST['Bookname'];
    $Authorname = $_POST['Authorname'];
    $isbn = $_POST['isbn'];
    $Publishername = $_POST['Publishername'];
    $Noofpages = $_POST['Noofpages'];
    $Booktype = $_POST['Booktype'];
    $Publicationyear = $_POST['Publicationyear'];


    $sql = "INSERT INTO `Bookstore` (`Bookname`, `Authorname`, `isbn`, `Publishername`,`Noofpages`, `Booktype`, `Publicationyear`) VALUES ('$Bookname', '$Authorname', '$isbn', '$Publishername','$Noofpages', '$Booktype', '$Publicationyear')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>