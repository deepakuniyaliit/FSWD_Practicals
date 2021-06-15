<?php
include('config.php')
?>

<?php
    if(isset($_POST['submit']))
    {
       $bname = $_POST['bname'];
       $aname = $_POST['aname'];
       $isbn = $_POST['isbn'];
       $pname = $_POST['pname'];
       $pyear = $_POST['pyear'];
       $btype = $_POST['btype'];
       $volume = $_POST['volume'];
       //echo "$bname $aname $isbn $pname $pyear $btype $volume";
       $sql = "INSERT INTO `users` (`Book_Name`, `Author_Name`, `ISBN_Number`, `Publisher_Name`, `Publication_Year`,`Book_Type`,`Number_Of_Pages`) VALUES ('$bname', '$aname', '$isbn', '$pname', '$pyear','$btype','$volume')";
        mysqli_query($conn, $sql);
        echo "Data Entered Successfully";

    }
    else
    {
        echo "Please click submit button";
    }
?>
