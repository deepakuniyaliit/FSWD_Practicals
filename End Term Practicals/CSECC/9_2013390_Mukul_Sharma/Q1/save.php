<?php
 $servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";
$conn = new mysqli($servername, 
    $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_REQUEST['val1'];
    if (empty($data)) {
        echo "data is empty";
    } else {
        $BookName=$_REQUEST['bn'];
        $AuthorName=$_REQUEST['an'];
        $ISBN=$_REQUEST['isbn'];
        $PublisherName=$_REQUEST['pn'];
        $NumPages=$_REQUEST['num'];
        $BookType=$_REQUEST['bt'];
        $sql = "INSERT INTO BookTable  VALUES ('$BookName', 
            '$AuthorName','$ISBN','$PublisherName','$NumPages','$BookType')";
        if(mysqli_query($conn, $sql)){
            echo "Records added successfully."; 
        } else{
            echo "ERROR: $sql. " 
                . mysqli_error($conn);
        }
    }
}
$conn->close();
?>