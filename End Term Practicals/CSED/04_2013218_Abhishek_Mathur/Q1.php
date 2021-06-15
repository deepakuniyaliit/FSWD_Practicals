<?php 
    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con){
        echo 'Not Connected to server';
    }

    if(!mysqli_select_db($con,'BookStore')){
        echo "Databse Not Selected";
    }

    $bookname = $_POST['bname'];
    $authorname = $_POST['author'];
    $isbnnumber = $_POST['isbnnum'];
    $publishername = $_POST['publisher'];
    $pyear = $_POST['pyear'];
    $booktype = $_POST['booktype'];
    $noofpages = $_POST['noofpages'];

    $sql = "INSERT INTO books (bookname,authorname,isbnnumber,publishername,publicationyear,booktype,noofpages) VALUES ('$bookname','$authorname','$isbnnumber','$publishername','$pyear','$booktype','$noofpages')";

    if(!mysqli_qyery($con,$sql)){
        echo 'Data not inserted';
    } else {
        echo 'Sucess';
    }

    header('refresh:2;url=index.html');

?>