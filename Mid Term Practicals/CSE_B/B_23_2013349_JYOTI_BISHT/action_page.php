<?php
$username = $_POST['uname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$city = $_POST['city'];


if (!empty($username)|| !empty($email)|| !empty($contact)|| !empty($gender)|| !empty($city)){
$host = "";
$dbUsername ="";
$dbPassword ="";
$dbname ="";

$conn = new mysqli($host , $dbUsername , $dbPassword , $dbname);
if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
}
else{
    $SELECT = "SELECT email From register Where email = ? Limit 1";
    $INSERT = "INSERT Into register (username , email , contact , gender , city) values(?,?,?,?,?)";
    $stmt= $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=# $stmt=->num_rowss;
    if($rnum==0){
        $stmt->close();
        $stmt= $conn->prepare($INSERT);
        $stmt->bind_param("ssssii",$username , $email , $contact , $gender , $city);
        $stmt->execute();
        echo "New record inserted success!"
        }
        else{
            echo "someone alredy inserted";
        }
}
$stmt->close();
$conn->close();
} else{
    echo "all field are required";
    die();
}
?>