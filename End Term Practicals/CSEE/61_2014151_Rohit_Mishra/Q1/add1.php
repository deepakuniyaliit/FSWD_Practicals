<?php
$showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include('config.php');
    $bname = $_POST['bname'];
    $aname = $_POST['aname'];
    $isbn = $_POST['isbn'];
    $pname = $_POST['pname'];
    $pyear =$_POST['pyear'];
    $btype =$_POST['btype'];
    $volume=$_POST['volume'];
    
    $sql = "INSERT INTO `users` (`bname`, `aname`, `isbn`, `pname`,`pyear`,`btype`,`volume`) VALUES ('$bname', ' $aname', '$isbn', ' $pname','$pyear','$btype','$volume')";
    $result=mysqli_query($conn, $sql);
    if($result){
      $showAlert=true;
      header('location:details.php');
    }
      else{
        echo "there was an error";
      }
    }

?>