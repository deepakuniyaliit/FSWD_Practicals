 <?php
include('config.php');
?>

<!-- Code to fetch data -->
<?php

    $sql="SELECT * FROM users";
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
                <td><a href="edit.php?id=<?php echo $row[0]?>">
                    <input type="button" value="Edit"></a></td>
                <td><input type="button" value="delete"></td>

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
[9:47 am, 15/06/2021] Priy: <!Doctype html>
<html lang="en">
    <head>
        <title>document     
        </title>
    </head>
    <body>
        <form action="server.php" method="POST">
            Enter book name:<input type="text">
            enter author name:<input type="text">
            enter ISBN name:<input type="number">
            enter publisher name:<input type="text">
            enter publication year:<select name="year" id="">
                <option value=<"2010">2010</option>
                <option value=<"2011">2010</option>
                <option value=<"2012">2010</option>
                <option value=<"2013">2010</option>
                <option value=<"2014">2010</option>
                <option value=<"2015">2010</option>
                <option value=<"2016">2010</option>
                <option value=<"2017">2010</option>
                <option value=<"2018">2010</option>
                <option value=<"2019">2010</option>
                <option value=<"2020">2010</option>
                <option value=<"2021">2010</option>
            </select>
            Number of pages: <input type="number" min="200" max="400">
            <input type="radio" id="action" name="booktype" value="action">
            <label for="action">Action</label><br>
            <input type="radio" id="adventure" name="booktype" value="adventure">
            <label for="adventure">Adventure</label><br>
            <input type="radio" id="classics" name="booktype" value="classics">
            <label for="classics">Classics</label><br>
            <input type="radio" id="comicbook" name="booktype" value="comicbook">
            <label for="comicbook">Comic Book</label><br>
            <input type="radio" id="graphicnovel" name="booktype" value="graphicnovel">
            <label for="graphicnovel">Graphic Novel</label><br>
            <input type="radio" id="detective" name="booktype" value="detective">
            <label for="detective">Detective</label><br>
            <input type="radio" id="mystery" name="booktype" value="mystery">
            <label for="mystery">Mystery</label><br>
            <input type="radio" id="hfiction" name="booktype" value="historical fiction">
            <label for="historical fiction">Historical Fiction</label><br>
            <input type="radio" id="horror" name="booktype" value="horror">
            <label for="horror">Horror</label><br>
        <input type="radio" id="lfiction" name="booktype" value="literary fiction">
        <label for="literary fiction">Literary Fiction</label><br>
        <input type="submit">
    </form>
</body>
</html>
