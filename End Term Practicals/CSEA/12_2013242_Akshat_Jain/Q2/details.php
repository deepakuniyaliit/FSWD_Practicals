<?php
$hn="localhost";
$un="root";
$pass="";
$db="bookstore";
$conn=mysqli_connect($hn,$un,$pass,$db);
?>
<?php

$sql="SELECT * FROM `books` ";
$res=mysqli_query($conn,$sql);

?>

<html><head>
    <style>
      table, th, td {
  border: 1px solid black;
  border-collapse:collapse;
}
}
      </style>
      </head>
    <body>
        <table >
            <thead ><tr>
                <th>Book ID</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Publisher</th>
                <th>Publication Year</th>
                <th>Pages</th>
                <th>Book Type</th>
</tr> </thead> 
<?php
if($res->num_rows>0)
{
    while($row=$res->fetch_assoc()){
        ?>
        <tbody>
        <tr>
  
        <td> <?php echo  $row["id"] ?></td>
     <td> <?php echo  $row["book"] ?></td>
     <td> <?php echo  $row["author"] ?></td>
     <td> <?php echo  $row["isbn"] ?></td>
     <td> <?php echo  $row["publisher"] ?></td>
     <td> <?php echo  $row["years"] ?></td>
     <td> <?php echo  $row["pages"] ?></td>
     <td> <?php echo  $row["types"] ?></td>
    
     </tr>
     </tbody>
    <?php }?>
<?php
}
?>
    </table>
    </body>
    </html>
