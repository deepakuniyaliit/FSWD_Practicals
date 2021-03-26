<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Solution 2</title>
   <style>
       .form{
           border:5px solid black;
           width:60%;
           margin:90px;
           padding:20px;
           text-transform:uppercase;
       }
       .form input{
           padding-left:7px;
           margin-left:10px;
       }
       .form button{
           width:120px;
           padding:7px;
           background-color:blue;
           border:none;
           border-radius:7px;
           color:white;
       }
   </style>
</head>
<body>
<div class="form">
   <form action="./output.php" method="GET">
       Username:<input type="text" name="usrname" placeholder="Enter Username"><br><br>
       Email:<input type="text" name="email" placeholder="Enter Email"><br><br>
       Contact:<input type="text" name="contact" placeholder="Enter Contact"><br><br>
       Gender:<br><br><input type="radio" name="gender" value="male">
       <label for="male">Male</label>
       <input type="radio" name="gender" value="female">
       <label for="female">Female</label><br><br>
       <label for="city">Select City:</label><br><br>
       <select name="city" id="city">
           <option value="mumbai">Mumbai</option>
           <option value="dehradun">Dehradun</option>
           <option value="jaipur">Jaipur</option>
           <option value="mussorie">Mussorie</option>
           <option value="chennai">Chennai</option>
           <option value="pune">Pune</option>
           <option value="bangalore">Bangalore</option>
           <option value="hyderabad">Hyderabad</option>
           <option value="lucknow">Lucknow</option>
       </select><br><br>
       <button type="Submit">Submit</button>
   </form>
</div>
 
</body>
</html>

