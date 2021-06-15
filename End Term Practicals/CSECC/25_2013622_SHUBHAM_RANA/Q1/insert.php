<?php
    $con = mysqli_connect('127.0.0.1','root','');
    if(!$con)
        echo "Not connected to server";
    else
    {
        if(!mysqli_select_db($con,'BookStore'))
            echo "Database not selected";
        else
            {
                $bname = $_POST['bname'];
                $aname = $_POST['aname'];
                $isbnno = $_POST['isnno'];
                $pname = $_POST['pname'];
                $publication = $_POST['publication'];
                $page = $_POST['page'];
                $type = $_POST['type'];
                $sql = "insert into book (bname,aname,isbnno,pname,publication,page,type) values ('$bname','$aname','$isbnno','$pname','$publication','$page','$type')";
                if(!mysqli_query($con,$sql))
                {
                    echo "Not inserted ";
                }
                else
                    echo "Succesfulley inserted";
                
            }
    }
    header("refresh:2; url=book.html");
    
?>