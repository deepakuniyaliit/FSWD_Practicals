<?php
include('configuration.php');
?>

<?php
 if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $id = $_POST['ID'];

    
    $sql = "INSERT INTO `users` (`id`,`username`, `email`, `contact`,`gender`, `city`) VALUES ($id, $username, $email, $contact,$gender, $city)";
    mysqli_query($conn,$sql);
  
}
else{
    echo"Please click submit button to submit the data";
}

?>






<html>
    <title>FORM</title>
    
       
   
    <body>
     <form name="myform" method="post" action="index.php" >
      Username<input type = "text" name ="username" id="name" required><br>
      Email<input type = "email" name ="email" id="email"required><br>
      Contact<input type ="number" name ="contact" id=""required><br>
      Gender<br>Male <input type="radio" name="gender" value="male" checked> 
      Female<input type="radio" name="gender" value="female" checked>
      Other<input type="radio" name="gender" value="other"><br>
      Select City <select name="city">
        <option value="Mumbai">Mumbai</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Mussorie">Mussorie</option>
        <option value="Nainital">Nainital</option>
        <option value="Chennai">Chennai</option>
        <option value="Pune">Pune</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Lucknow">Lucknow</option>
        </select><br>
        <button onclick="valid()">VALIDATE</button>
        <input type="submit" value="Submit">        
     </form>

    </body> 
    <script type="text/javascript">
        function valid()
        {
            var name = document.forms["myform"]["username"].value;
            var email = document.forms["myform"]["email"].value;
            var contact = document.forms["myform"]["contact"].value;
            var pos = email.indexOf("@");
            var dot = email.indexOf(".")
            
            if(name=="")
            {alert("Name must be filled");
            return(false);
        }
             if(pos<1)
         {   alert("Please enter a valid email");
            return(false);}
        
            if(dot<pos)
            {alert("Please enter a valid email");
            return(false);}
            
            if(dot==pos+1)
            {alert("Please enter a valid email");
            return(false);}
            
           
            if(contact.length!=10)
            {alert("Please enter a valid No");
            return(false);}
        
        
        
        }
        
            </script>
            
    
</html>