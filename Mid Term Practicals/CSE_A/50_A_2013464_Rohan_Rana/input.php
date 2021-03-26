<?php
include('configuration.php')
?>
<?php
    if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $contact=$_POST['number'];
            $gender = $_POST['gender'];
            $city = $_POST['city'];

            $sql = "INSERT INTO `users` (`username`, `email`,'contact', `gender`, `city`) VALUES ('$username', '$email','$number', '$gender', '$city')";
             mysqli_query($conn, $sql);
    }
?>
<head>
    <title>Form</title>
    <script type="text/javascript">
        function validate(){
            var na=document.form.username;
            var em=document.form.email;
            var nu=document.form.number;
            var ge=document.form.gender;
            var ci=document.form.city;
              if (na.value.length<=0) {
                alert("Please Enter a Name");
                na.focus();
                return false;
           }
             if (em.value.length<=0) {
                alert("Please Enter a Email");
                em.focus();
                return false;
           }
           if (nu.value.length<=0) {
                alert("Please Enter a Number:");
                nu.focus();
                return false;
           }
         
            if (ci.value=="Select City") {
                alert("Please Select a city");
                ci.focus();
                return false;
           }
             var check=false;
           for(var i = 0 ; i<ge.length;i++){
            if (ge[i].checked) {
                check=true;
                break;
            }
           }
             if (!check) {
                alert("Please Select a Gender");
                return false;
           }
           return true;
        }
    </script>
</head>

<body>
    <div align="center">
        <table>
    <form action="input.php" method="GET" name="form">
        <tr><td>Username</td><td colspan="2"><input type="text" name="username" id="username"></td></tr>
        <tr><td>E-Mail</td><td colspan="2"><input type="email" name="email" id="email"></td></tr>
        <tr><td>Number</td><td colspan="2"><input type="tel" name="number" id="number" pattern="[0-9]{10}"></td></tr>  
        <tr><td>Gender</td><td><input type="radio" name="gender" value="Male">Male</td><td><input type="radio" name="gender" value="Female">Female</td><td><input type="radio" name="gender" value="Other">Other</td></tr>     
        <tr><td>City</td><td colspan="2"><select  name="city" id="city">
            <option value="Mumbai">Mumbai</option>
  			<option value="Delhi">Delhi</option>
  			<option value="Jaipur">Jaipur</option>
  			<option value="Mussoorie">Mussoorie</option>
  			<option value="Nanital">Nanital</option>
  			<option value="Chennai">Chennai</option>
  			<option value="Pune">Pune</option>
  			<option value="Bangalore">Bangalore</option>
  			<option value="Hyderabad">Hyderabad</option>
  			<option value="Lucknow">Lucknow</option>
                 </select></td></tr>  
            
        <tr><td></td><td colspan="2" ><input type="submit" name="submit" value="SUBMIT" onclick=" return validate()"></td></tr>
    </form>
</table><br><br>

    Click here to display user info<a href="display.php"><button name="display" value="Display Users">Display</button></a>

   
</div>
</body>
</html>
