<html>
<head>
    <title>form</title>
</head>
<body>

<form method="POST" action="postmethod.php">
USERNAME    :<input type="text" name="username" placeholder="enter name" required><br>
EMAIL   :<input type="email" name="email" placeholder="enter email" required ><br>
CONTACT :<input type="text" name="contact" placeholder="enter 10 digit mobile number" required pattern="[0-9]{10}"><br>
GENDER  :   male<input type="radio" name="gender" value="male" required>
         female<input type="radio" name="gender" value="female" required>
         other<input type="radio" name="gender" value="other" ><br>
CITY    :
            <select name="city">
        <option value="mumbai">mumbai</option>
        <option value="delhi">delhi</option>
        <option value="jaipur">jaipur</option>
        <option value="mussoorie">mussoorie</option>
        <option value="nanital">nanital</option>
        <option value="chennai">chennai</option>
        <option value="pune">pune</option>
        <option value="bangalore">bangalore</option>
        <option value="hyderabad">hyderabad</option>
        <option value="lucknow">lucknow</option>
        </select> <br>
<input type="submit" name="submit">
</form>
</body>
</html>
<?php 
include('configuration.php');
?>
<?PHP
    function check($username,$email,$contact,$gender,$city)
    {
        if(strlen($username)==0 || strlen($email)==0 || strlen($contact)==0 || strlen($gender)==0 || strlen($city)==0 )
        {
            echo "Please fill all the details";

        }
        if(strlen($contact)<10 || strlen($contact)>10)
        {
            echo "please enter ten digit mobile number";
        }
    }
    if(isset($_POST['submit']))
    {   
        
        $username=$_POST['username'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        check($username,$email,$contact,$gender,$city);
        $sql="INSERT INTO users (username,email,contact,gender,city) VALUES ('$username','$email','$contact', '$gender','$city')";
        mysqli_query($conn, $sql);
        $sql="SELECT * FROM `users`";
        $result=mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc())
        {
            echo "<br>".$row['id']."." ."Details of user with ID=".$row['id'];
            echo "<br>  .username-".$row['username'];
            echo "<br>  .Email-".$row['email'];
            echo "<br>  .Contact-".$row['contact'];
            echo "<br>  .gender-".$row['gender'];
            echo "<br>  .city-".$row['city'];
        }



    }
    else
    {
        echo "not submitted..";
    }
?>