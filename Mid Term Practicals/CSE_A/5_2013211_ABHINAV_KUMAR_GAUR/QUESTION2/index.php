<?php
include('conn.php');
?>
<?php
    if (isset($_POST['username']) ){
        $username = $_POST['username'];
    } else {
        $username = " " ;
       echo "<script>alert('name should not be empty')</script>" ;

    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $email = $_POST ["email"];  
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
        if (!preg_match ($pattern, $email) ){  
        $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
      }
    } else {
        $email = " ";
    }
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = '';
    }
    if (isset($_POST['city'])){
        $city = $_POST['city'];
    } else {
        $city = '';
    }
    if(isset($_POST['number'])){
        $number = $_POST['number'];
        if(strlen($number)<10){
			echo "<script>alert('contact number should contains 10 digit')</script>" ;

		} 
    }
    else{
        $number = '';
    }


     $sql = "INSERT INTO `users` (`username`, `email`,`contact` ,`gender`, `city`) VALUES ('$username', '$email', '$number','$gender', '$city')";
     mysqli_query($conn, $sql); 
     echo"$number";


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
            <form action="output.php" method="post">
                <input type="text" name="username" placeholder="Enter here" required><br>
                <input type="email" name="email" placeholder="Enter here" required><br>
                <input type="text" name ="number"  placeholder="phone number" maxlength="10" minlength="10" required><br>
                <input type="radio" name="gender" value="male">
                <label for="male">Male</label> <br>
                <input type="radio" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" name="gender" value="other">
                <label for="other">Other</label> <br>

                <Select name="city">
              
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