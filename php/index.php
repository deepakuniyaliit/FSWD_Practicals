<?php
$insert=true;
if(isset($_POST['username'])){
  //set connection
  $server="localhost";
  $username1="root";
  $password="";

//create database
  $con=mysqli_connect($server,$username1,$password);
  //check for connection purpose
  if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
  }

  //collect post variables
$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$city=$_POST['city'];
  $sql="INSERT INTO `info`.`info` ( `username`, `email`, `contact`, `gender`, `city`, `date`)
  VALUES ( '$username', '$email', '$contact', '$gender', '$city', current_timestamp());";
//execute the query
  if($con->query($sql)==true){
  $insert=true;
  }
  else{
    echo "ERROR:$sql <br> $con->error";
  }
  $con->close();
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <title>Q2.</title>
 </head>
 <body>
     <div class="container">
    <h1>Welcome to Pro Site</h1>
    <h2>Please register yourself!</h2>
    <?php
    if($insert==true){
echo "<p>Thanks for register!</p>";
}?>
    <form action="index.php" method="post">
        <label for="username" class="form-label">Username: </label><br>
        <input type="text" name="username" id="fname" class="form-control" placeholder="username"><br>

        <label for="email" class="form-label">Email: </label><br>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email"><br>

  <label for="contact" class="form-label">Contact: </label><br>
    <input type="text" name="contact" class="form-control" placeholder="contact"><br>


      <label for="gender" class="form-label">Gender: </label><br>
      <input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>

<br>

<label for="city" class="form-label">City: </label><br>
<select name="city" class="countries" id="countryId">
<option value="mumbai">mumbai</option>
<option value="jaipur">jaipur</option>
<option value="nanital">nanital</option>
<option value="mussorie">mussorie</option>
<option value="delhi">delhi</option>
<option value="chennai">chennai</option>
<option value="pune">pune</option>
<option value="banglore">banglore</option>
<option value="hydrabad">hydrabad</option>
<option value="luckhnow">luckhnow</option>
</select><br >

        <br ><button type="submit" class="btn btn-primary" >submit</button>
    </form>
    </div>
 </body>
 </html>
