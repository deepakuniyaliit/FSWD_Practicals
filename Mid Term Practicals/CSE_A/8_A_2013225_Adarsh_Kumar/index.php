<?php
include('configuration.php');
?>

<?php 
	$flag = true; 
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email']; 
        $contact=$_POST['contact'];
		$gender = $_POST['gender'];
		$city = $_POST['city']; 
		if($city == "Select City")
		{
			echo "Enter Valid City"; 
			$flag = false; 
		}
		else
			$city = $_POST['city'];
		
	 	if($flag == true){
			$sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
			$a = mysqli_query($conn , $sql);
		}
	}	

?>

<!DOCTYPE html>
<html>
    <head>
        <title>HTML Form</title>
        <style>
            div{
                width:400px;
                height:300px;
                padding:10px;
                margin-left:35%;
                margin-right:30%;
                
                float:center;
            }
        </style>
    </head>
    <body>
        <div>
        <form method="POST" action="form.php" onSubmit="return validation()" >
            Username <input type="text" name="username" placeholder="Enter Your Username" id="user" required><br><br>
            E-Mail <input type="email" name="email" placeholder="Enter Your E-Mail" id="emai" required><br><br>
            Contact <input type="text" name="contact" placeholder="Enter 10 digit contact" id="cont"  required><br><br>
            Select Gender - 
            Male <input type="radio" name="gender" value="M" checked>
            Female <input type="radio" name="gender" value="F"><br><br>
            
            Select Your City - <select name="city">
                <option value="Dehradun" selected>MUMBAI</option>
                <option value="Delhi">DELHI</option>
                <option value="Nanital">JAIPUR</option>
                <option value="Mussoorie">MUSSOORIE</option>
                <option value="Mussoorie">NAINITAL</option>
                <option value="Mussoorie">CHENNAI</option>
                <option value="Mussoorie">PUNE</option>
                <option value="Mussoorie">HYDERABAD</option>
                <option value="Mussoorie">BENGALORE</option>
                <option value="Mussoorie">LUCKNOW</option>
            </select>
            <br><br>
            <input type="submit" name="submit">
        </form>
        </div>
    </body>
</html>