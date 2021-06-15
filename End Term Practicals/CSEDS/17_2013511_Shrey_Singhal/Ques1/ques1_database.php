<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        $conn = mysqli_connect("localhost", "root", "", "staff");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all input from the form data(input)
        $bookName =  $_REQUEST['bookName'];
        $authorName = $_REQUEST['authorName'];
        $isbnNumber =  $_REQUEST['isbnNumber'];
        $publisherName = $_REQUEST['publisherName'];
        $noOfpages = $_REQUEST['noOfpages'];
        $bookType = $_REQUEST['bookType'];
        $pbyear = $_REQUEST['pbyear'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO college  VALUES ('$bookName', 
            '$authorName','$isbnNumber','$noOfpages','$bookType','$pbyear')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$bookName\n $authorName\n "
                . "$isbnNumber\n $noOfpages\n $bookType\n $pbyear");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>