<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript">
function valid()
{
	
	var e=document.getElementById("e").value;
	var u=document.getElementById("u").value;
	var c=document.getElementById("c").value;

var em=	/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(!em.test(e))
{
	alert("not a Valid Email");
	return false;
}
if(u=="")
{
	alert("Enter User Name");
	return false;
}

if(c.length<10)
{
	alert("Enter Valid Mobile");
	return false;
}

	
}
</script>
</head>
<body>
<div style="height:100%;">
<div style="color:white; height:60px; width:100%">
<center><h1>Welcome<br><hr></h1></center>
</div>
<br><br>
<br>	
<center>
<form onsubmit="return valid()">
<table cellspacing="10" cellpadding="10">
<tr>
<td><b>Enter Username</td>
<td><input type="text" name="u" id="u"></td>
</tr>
<br><br>
<tr>
<td><b>Enter email</td>
<td><input type="text" name="e" id="e" ></td>
</tr>
<tr>
<td><b>contact</td>
<td><input type="text" name="c" id="c"></td>
</tr>
<tr>
<td><b>Select gender</td><td>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
</td></tr>
<tr>
<td><label for="city"><b>Select city</label></td><td>
<select id="city" name="city">
  <option value="mumbai">Mumbai</option>
  <option value="delhi">Delhi</option>
  <option value="mussoorie">Mussoorie</option>
  <option value="nanital">Nanital</option>
  <option value="chennai">Chennai</option>
  <option value="pune">Pune</option>
  <option value="banglore">Banglore</option>
  <option value="hyderabad">Hyderabad</option>
  <option value="lucknow">Lucknow</option>
</select>
<tr>
<td>
<button type="submit" class="btn btn-primary" name="submit" value="submit">SUBMIT</button>
</td>
</tr>
</table>
</form>

</center>
</div>
<?php
if(isset($_REQUEST['submit']))
{
	
	
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"WebPractical");
$a=$_REQUEST['u'];
$e=$_REQUEST['e'];
$c=$_REQUEST['c'];
$m=$_REQUEST['gender'];
$city=$_REQUEST['city'];
$q="insert into users (username,email,contact,gender,city)values('$a','$e','$c','$m','$city')";
	$rs=mysqli_query($con,$q)or die("Enable to execute ".mysqli_error($con));
	echo"<br>data submitted";
}
else
	echo"<br>data not	 submitted";	
?>
</body>
</html>
