<?php
include('connection.php');
?>

<?php
    if (isset($_POST['username'])) {

        $username = $_POST['username'];
    } else {
        $username = '';
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = '';
    }
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = '';
    }
    if (isset($_POST['city'])) {
        $city = $_POST['city'];
    } else {
        $city = '';
    }
    if(isset($_POST['number'])){
        $number = $_POST['number'];
    }else{
        $number = '';
    }

?>

<?php
$sql = "INSERT INTO `users`(`username`, `email`, `contact`,`gender`, `city`) VALUES ('$username','$email','$number','$gender','$city')";
$res = mysqli_query($connection, $sql);
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="enter">Enter username <br></div>
            <div class="enter">Enter email <br></div>
            <div class="enter">Enter phone number <br></div>
            <div class="enter">Select gender <br></div>
            <div class="enter4">Select City <br></div>
        </div>
        <div class="right">
            <form action="index.php" method="POST">
                <input type="text" name="username" placeholder="Enter here" required><br>
                <input type="email" name="email" placeholder="Enter here" required><br>
                <input type="tel" name="number" placeholder="Enter here"  maxlength="10" minlength="10" required> <br>
                <input type="radio" name="gender" value="male">
                <label for="male">Male</label> <br>
                <input type="radio" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" name="gender" value="other">
                <label for="other">Other</label> <br>

                <Select name="city">
                    <option value="meerut">Meerut</option>
                    <option value="delhi">Delhi</option>
                    <option value="gzb">Ghaziabad</option>
                    <option value="haridwar">Haridwar</option>
                    <option value="nainital">Nainital</option>
                    <option value="jaipur">jaipur</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="kolkata">Kolkata</option>
                    <option value="hyderabad">Hyderabad</option>
                    <option value="patna">Patna</option>
                </Select> <br>
                <input type="submit" value="Submit" class="btn">
            </form>
        </div>

    </div>
</body>

</html>