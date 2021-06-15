<?php
    $con = mysqli_connect('127.0.0.1','root','');
    if(!$con){
        echo "Connection not established";
    }    
    $bookName=test_input($_POST["bookName"]);
    $authorName=test_input($_POST["authorName"]);
    $isbnNumber=test_input($_POST["isbnNumber"]);
    $publisherName=test_input($_POST["isbnNumber"]);
    $publicationYear=test_input($_POST["publicationYear"]);
    $noOfPages=test_input($_POST["noOfPages"]);
    $bookType=test_input($_POST["bookType"]);
    $sql1="CREATE DATABASE BookStore";

    if(!mysqli_select_db($con,'BookStore'))
        echo "Databse not connected";
    $sql2="CREATE table BookDetails (
        bookName VARCHAR(30),
        authorName VARCHAR(30),
        isbnNumber INT(9),
        publisherName VARCHAR(30),
        publicationYear INT(4),
        noOfPages INT(3),
        bookType VARCHAR(20),
        )";
    if(!mysqli_query($con,$sql2))
        echo "Table not created";    
    $sql3= "INSERT INTO BookStore VALUES ('$bookName','$authorName','$isbnNumber','$publisherName','$publicationYear','$noOfPages','$bookType)";
    if(!mysqli_query($con,$sql3))
        echo "query not executed";
    else
        echo "Inserted successfully";
    header("refresh:2; url=db1.html");

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>