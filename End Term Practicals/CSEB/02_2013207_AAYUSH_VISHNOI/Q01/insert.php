<?php
include('config.php')
?>

<?php

if(isset($_POST['submit'])){

    $bName = $_POST['bname'];
    $aName = $_POST['aname'];
    $isbnNumber = $_POST['isbn'];
    $pName = $_POST['pname'];
    $pYear = $_POST['pyear'];
    $bType = $_POST['btype'];
    $pages = $_POST['volume'];

    $sql = "INSERT INTO `BookStore` (`bname`, `aname`, `isbn`, `pname`, `pyear`, `volume`, `btype`) VALUES ('$bName', '$aName', '$isbnNumber', '$pName', '$pYear', '$pages', '$bType')";    
    if(!mysqli_query($con, $sql)){
        echo "Error1 ". mysqli_error($con);
    }
    else{
        echo "Data sent successfully....1";
    }
}
else{
    echo "please enter the details";
}

?>

