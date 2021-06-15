<?php
    $con = mysqli_connect('127.0.0.1','root','');
    if(!$con)
        echo "Connection not established";
    $bName=$_POST["bName"];
    $aName=$_POST["aName"];
    $isbn=$_POST["isbn"];
    $pName=$_POST["pName"];
    $pYear=$_POST["pYear"];
    $pages=$_POST["pages"];
    $bType=$_POST["bType"];
    $sql="CREATE database BookStore";
    if(!mysqli_select_db($con,'BookStore'))
        echo "DB not connected";
    $sql2="CREATE table BookDetails (
        bookid INT AUTO_INCREMENT,
        bookName VARCHAR(30),
        authorName VARCHAR(30),
        isbn INT(9),
        publisherName VARCHAR(30),
        publisherYear INT(4),
        noOfPages INT(3),
        bookType VARCHAR(20),
        )";
    if(!mysqli_query($con,$sql1))
        echo "Table not created";    
    $sql3= "INSERT INTO BookStore
            VALUES ('$bName','$aName','$isbn','$pName','$pYear','$pages','$bType)";
    if(!mysqli_query($con,$sql2))
        echo "query not executed";
    else
        echo "inserted";
    header("refresh:2; url=q1.html");
?>