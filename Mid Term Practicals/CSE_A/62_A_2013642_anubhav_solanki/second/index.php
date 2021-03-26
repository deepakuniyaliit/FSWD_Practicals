<?php
include("configuration.php");
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $gender = $_POST["gender"];
    $city = $_POST["city"];   
}

validation($username,$email,$contact,$gender,$city);

    function validation($username,$email,$contact,$gender,$city){
        $flag = true;
        if(empty($username) || empty($email) || empty($contact) || empty($gender) || empty($city) || strlen($contact)!=10){
            $flag = false;
        }
    }

    $sql = "INSERT INTO `users` (`id`, `username`, `email`, `gender`, `city`, `contact`) VALUES (NULL, '$username', '$email', '$gender', '$city','$contact')";
    mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $sql = "SELECT * FROM `user`";
       $data = $conn->query($sql);
       if($data->num_rows > 0){
           $i=0;
           while($row = $data->fetch_assoc()){
               $i = $i + 1;
    ?>
            <div>
            <?php echo $i?>. Details of user with ID = <?php echo $row["id"]?> 
            <ul>
                <li>Username  - <?php echo $row["username"]?> </li>
                <li>Email - <?php echo $row["email"]?></li>
                <li>Contact - <?php echo $row["contact"]?></li>
                <li>Gender - <?php echo $row["gender"]?></li>
                <li>City - <?php echo $row["city"]?></li>
            </ul>
            </div>
    <?php
    }
}
    ?>
</body>
</html>
