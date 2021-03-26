<?php
include('config.php');
if(isset($_POST["submit"])){
    $username=$_POST['username']
    $email=$_POST['email']
    $contact=$_POST['contact']
    $gender=$_POST['gender']
    $city=$_POST['city']
    "insert into "users" ('id', 'username', 'email','contact', 'gender' , 'city') values(null, "priyanka", "priyanka@gmail.com", "1234567990","female","delhi");
}
else{}
?>
<html>
    <head>
        <title>form</title>
        <body>
            <form  method= "GET" action ="form.html">
        USERNAME<input type="text" name="username" placeholder="Type Your Username" required><br>
        E-MAIL<input type="email" name="email" placeholder="Type Your E-mail" required><br>
        CONTACT <input type="text" name="contact number" placeholder="Type Your Contact Number" size="10" required><br>
        Gender<br>
        Male<input type="radio" name="gender" value="male" >
        Female<input type="radio" name="gender" value="female" >
        Others<input type="radio" name="gender" value="others" ><br>
        Select City <select name="City">
           <option value="Jaipur"> Jaipur</option>
           <option value="Delhi"> Delhi</option>
           <option value="Mumbai"> Mumbai</option>
           <option value="Mussoorie"> Mussoorie</option>
           <option value="Nanital"> Nanital</option>
           <option value="Chennai"> Chennai</option>
           <option value="Pune">Pune</option>
           <option value="Banglore"> Banglore</option>
           <option value="Hyderbad"> Hyderbad </option>
           <option value="Lucknow"> Lucknow</option>
        </select><br>
        <input type="submit" value="Click Here To Submit Your Data">
        </form>
        </body>
    </head>
</html>