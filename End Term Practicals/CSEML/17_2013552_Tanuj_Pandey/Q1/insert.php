<?php
require 'create_database.php';
require 'create_table.php';


$bname=$aname=$inumber=$pname=$pyear=$btype=$pgvalue="";
if($_SERVER["REQUEST METHOD"]=="POST")
{
    if(isset($_POST["submit"]))
    {
        $bname=$_POST["bname"];
        $aname=$_POST["aname"];
        $inumber=$_POST["inumber"];
        $pname=$_POST["pname"];
        $pyear=intval($_POST["pyear"]);
        $btype=$_POST["btype"];
        $pgvalue=intval($_POST["pgvalue"]);
        
    }
}
$sql="INSERT INTO BOOKSTORE.Books VALUES ('$bname','$aname','$inumber','$pname','$pyear','$btype','$pgvalue')";
if(mysqli_query($con,$sql))
    echo "Row inserted successfully";
else
    echo "Error while inserting row: ".mysqli_error($con);

?>