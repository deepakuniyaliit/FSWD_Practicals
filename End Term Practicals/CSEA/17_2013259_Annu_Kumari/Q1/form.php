<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "BookStore";
    $conn = mysqli_connect($host,$username,$password,$database);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $bookName = $authorName = $isbnNumber = $publisherName = $publisherYear = $noOfPages = $BookType = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $bookName = test_input($_POST["bookName"]);
            $authorName = test_input($_POST["authorName"]);
            $isbnNumber = test_input($_POST["isbnNumber"]);
            $publisherName = test_input($_POST["publisherName"]);
            $publisherYear = test_input($_POST["publisherYear"]);
            $noOfPages = test_input($_POST["noOfPages"]);
            $BookType = test_input($_POST["BookType"]);
            $sql = "INSERT INTO `users` (`id`, `bookName`, `authorName`, `isbnNumber`, `publisherName`, `publisherYear`, `noOfPages`, `BookType`) VALUES (NULL, '$bookName', '$authorName', '$isbnNumber', '$publisherName','$publisherYear','$noOfPages','$BookType')";
            mysqli_query($conn,$sql);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        bookName : <input type="text" name="bookName">
        <br><br>
        authorName: <input type="text" name="authorName">
        <br><br>
        isbnNumber: <input type="text" name="isbnNumber">
        <br><br>
        publisherName: <input name="publisherName"></input>
        <br><br>
        publisherYear: 
        <select id="year">
        </select> 
        <br><br>
        noOfPages:
        <input type="range" name="noOfPages" min="200" max="400">
        <br><br>
        <div id="btype">
        BookType:
        <script>
            var types = ["Action","Adventure","Classics","Comic","Book","Graphic Novel","Detective","Mystery","Historical Fiction","Horror","Literary Fiction"];
                types.map(function(e){
                    document.querySelector("#btype").innerHTML+=`<input type="radio" name="BookType" value="${e}">${e}`
                })
        </script>
        </div>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
</body>
<script>
    for(let i=2010;i<=2021;i++){
        document.querySelector("#year").innerHTML+=`<option name="publisherYear" value="${i}">${i}</option>`
    }
</script> 
</html>