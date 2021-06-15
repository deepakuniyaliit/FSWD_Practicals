<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="Select * from bookDetails";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>book id</th>";
                echo "<th>Book Name</th>";
                echo "<th>Author </th>";
                echo "<th>ISBN</th>";
                echo "<th>Publisher Name</th>";
                echo "<th>Publisher Year</th>";
                echo "<th>Pages</th>";
                echo "<th>Book Type</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['bookName'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['isbn'] . "</td>";
                echo "<td>" . $row['pubname'] . "</td>";
                echo "<td>" . $row['pubyear'] . "</td>";
                echo "<td>" . $row['pages'] . "</td>";
                echo "<td>" . $row['booktype'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }

$conn->close();
?>
