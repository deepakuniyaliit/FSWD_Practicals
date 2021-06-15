<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="BookStore";
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error."<br>");
}
echo "Connected successfully <br>";

    $sql="SELECT * FROM book";
    $result=mysqli_query($conn, $sql);

    if($result!==false && $result->num_rows > 0){
    ?>

    <table border="1px">
        <thead>
            <tr>
                <th>BOOK ID</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Publisher</th>
                <th>Publiction Year</th>
                <th>Pages</th>
                <th>Book Type</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while($row = $result->fetch_array()){?>
            <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php echo $row[3]?></td>
                <td><?php echo $row[4]?></td>
                <td><?php echo $row[5]?></td>
                <td><?php echo $row[6]?></td>
                <td><?php echo $row[7]?></td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php  }
?>


<html>

<head>
    
    <title>User Details</title>
</head>
<body>
    
</body>
</html>