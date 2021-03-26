
<html>
<head>
<script>
function validateForm() {
  var x = document.forms["Q2_FORM"]["username"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var y = document.forms["Q2_FORM"]["contact"].value;
  if (y.length!=10) {
    alert("length must be 10");
    return false;
  }
  var y = document.forms["Q2_FORM"]["email"].value;
  var flag=0;
  for(i=0;i<y.length();++i)
  {
      if(y.charAt(i)=='@')
      {   flag=1;return true;
      }
  }
  if(flag==0){alert("email should have @");return false;}
  return true;
  
}
</script>
</head>
<body>
<form name="Q2_FORM" action="Q2_FORM.php" onsubmit="return validateForm()" method="get">
  USERNAME:  <input type="text" name="username" placeholder="Enter Username" required ><br>
  EMAIL<input type="text" name="email" placeholder="Enter Email" required ><br>
  CONTACT:<input type="text" name="contact" placeholder="Enter 10 digit contact" required ><br>
  CITY<select  name="city" >
                 <option>Jaipur</option>
                 <option>Mussoorie</option>
                 <option>Chandigarh</option>
                 <option>Nainital</option>
                 <option>Lucknow</option>
                 <option>Pune</option>
                 <option>Bangalore</option>
                 <option>Hyderabad</option>s
                 <option>Mumbai</option>
                 <option>Chennai</option>
                 </select><br>
        GENDER  &nbsp MALE<input type="radio" name="gender" value="male">
        &nbsp FEMALE<input type="radio" name="gender" value="female">
        OTHER<input type="radio" name="gender" value="other">

        <br>
         <input type="submit" name="submit" value="submit">
</form>

</body>
</html>