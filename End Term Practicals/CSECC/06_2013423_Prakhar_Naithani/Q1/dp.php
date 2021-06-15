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
                $bname = $_POST['bn'];
                $aname = $_POST['an'];
                $isbnno = $_POST['in'];
                $pname = $_POST['pn'];
                $publication = $_POST['py'];
                $page = $_POST['nop'];
                $type = $_POST['bt'];
                $sql = "insert into book (bname,aname,isbno,pname,publication,page,type) values ('$bname','$aname','$isbnno','$pname','$publication','$page','$type')";
                if(!mysqli_query($con,$sql))
                {
                    echo "Not inserted ";
                }
                else
                    echo "Succesfulley inserted";
                
            }
    }
    header("refresh:2; url=form.html");
    
?>