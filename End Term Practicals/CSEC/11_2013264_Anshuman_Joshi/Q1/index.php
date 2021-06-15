<?php
if(isset($_POST['bookName'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    $bookName=$_POST['bookName'];
    $authorName=$_POST['authorName']; 
    $isbnNumber=$_POST['isbnNumber'];
    $publisherName = $_POST['publisherName'];
    $publicationYear=$_POST['publicationYear'];
    $numberofpages=$_POST['numberofpages'];
    $booktype=$_POST['BookType'];



    $sql = "INSERT INTO booksdata VALUES ('$bookName', '$authorName', '$isbnNumber', '$publisherName', $publicationYear, $numberofpages, '$booktype')";

    if($conn->query($sql)=== TRUE){
        echo "Successfully inserted";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>
    <form action="index.php" method="post">
       bookName: <input type="text" name="bookName" placeholder="bookName">
       authorName: <input type="text" name="authorName" placeholder="authorName"><br>
       isbnNumber: <input type="text" name="isbnNumber" placeholder="isbnNumber">
       publisherName: <input type="text" name="publisherName" placeholder="publisherName"><br>
       publicationYear: <select name="publicationYear" id="publicationYear">
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select><br>
        <label for="Numberofpages">Numberofpages (between 200 and 400):</label>
        <input type="range" name="numberofpages" min="200" max="400" placeholder="Numberofpages">
        <div id="btype">
        BookType:
        <script>
            var types = ["Action","Adventure","Classics","Comic","Book","Graphic Novel","Detective","Mystery","Historical Fiction","Horror","Literary Fiction"];
                types.map(function(e){
                    document.querySelector("#btype").innerHTML+=`<input type="radio" name="BookType" value="${e}">${e}`
                })
        </script><br><br>
       <input type="submit">
    </form>
    
</body>
</html>