<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact=$_POST['contact'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `user` (`username`, `email`, `contact`, `gender`, `city`) VALUES ('$username', '$email', ' $contact', '$gender', '$city')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>
 <?php
$nameErr = $emailErr = $genderErr = $cityErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $username = $_POST["username"];
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
  if (empty($_POST["city"])) {
    $cityErr = "Gender required";
  } else {
    $city = $_POST["city"];
  }

 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML form</title>
    <style>
        div{
            width:400px;
            height:300px;
            padding:50px;
            margin-top: 10%;
            margin-left:35%;
            margin-right:30%;
            border:2px dashed rgb(3, 3, 39);
            float:center;
        }
    </style>
</head>
<body>
    <div>
        <form method="POST" action="index.php">
            <h1>   Fill the form with correct details...   </h1>
            Username <input type="text" name="username" placeholder="Enter Your Username" required><br><br>
            E-Mail <input type="email" name="email" placeholder="Enter Your E-Mail" required><br><br>
            Contact <input type="text" name="contact" placeholder="Enter your contact details" maxlength="10" pattern="\d{10}"><br><br>
            Select Gender - 
            Male <input type="radio" name="gender" value="M" checked>
            Female <input type="radio" name="gender" value="F">
            Other <input type="radio" name="gender" value="O"><br><br>
            Select Your City - <select name="city">
                <option value="Mumbai" selected>DEHRADUN</option>
                <option value="Delhi">DELHI</option>
                <option value="Nanital">NAINITAL</option>
                <option value="Mussoorie">MUSSOORIE</option>
                <option value  = "Jaipur">JAIPUR</option>
                <option value="Chennai" >Chennai</option>
                <option value="Pune">PUNE</option>
                <option value="Bangalore">BANGALORE</option>
                <option value="Hydrabad">HYDRABAD</option>
                <option value  = "Lucknow">LUCKNOW</option>
            </select>
            <br><br>
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>
