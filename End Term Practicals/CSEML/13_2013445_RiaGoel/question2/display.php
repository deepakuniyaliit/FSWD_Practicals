<?php include './dbh.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
<br>
<center><h3>Book Table</h3> </center>
<br>
    <table class=" table table-bordered">
        <thead>
            <tr>
                <th scope="col">Book id</th>
                <th scope="col">Book Name</th>
                <th scope="col">Author</th>
                <th scope="col">Is BN Number</th>
                <th scope="col">Publisher Name</th>
                <th scope="col">Publication Year</th>
                <th scope="col">No. of Pages</th>
                <th scope="col">Book Type</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "Select * from bookstore";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                while ($row = mysqli_fetch_assoc($res)) {
                  echo  '<tr>
                        <th scope="row">'.$row['id'].'</th>
                        <td>'.$row['bookName'].'</td>
                        <td>'.$row['authorName'].'</td>
                        <td>'.$row['isbnNumber'].'</td>
                        <td>'.$row['publisherName'].'</td>
                        <td>'.$row['publication_year'].'</td>
                        <td>'.$row['noOfPages'].'</tds>
                        <td>'.$row['book_type'].'</td>
                    </tr>';
                 }
            } ?>
        </tbody>
    </table>
</body>

</html>