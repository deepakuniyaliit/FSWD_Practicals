<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "BookStore";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from books";
$res = $conn->query($sql);
?>
<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
            }
            td,th{
                padding:10px;
            }
            </style>
</head>
    <body>
        <table border="1">
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Publisher</th>
                    <th>Publisher Year</th>
                    <th>Pages</th>
                    <th>Book Type</th>
</tr>
            <tbody>           
<?php if ($res->num_rows > 0)
{
    while ($row = $res->fetch_assoc())
    { ?>
     <tr>
            <td><?php echo $row['id'] ?></td>
         <td><?php echo $row['Bookname'] ?></td>
         <td><?php echo $row['Authorname'] ?></td>
         <td><?php echo $row['ISBN'] ?></td>
         <td><?php echo $row['Publishername'] ?></td>
         <td><?php echo $row['PublicationYear'] ?></td>
         <td><?php echo $row['Pages'] ?></td>
         <td><?php echo $row['Booktype'] ?></td>
    </tr><?php
    } ?>
    </tbody>
    </body>
    </html>
    <?php
}
else echo "table is empty";
$conn->close();
?>
