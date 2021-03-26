
<html>
<head>
	<title>html form</title>
      <script >
            function validateform()
            {
                  var c=document.forms["form"]["USERNAME"].value;
                  if(c==" ")
                  {
                        alert("name must be filled");
                        return false;
                  }
                  var t=document.forms["form"]["CONTACT"].value;
                  if(t.length!=10)
                  {
                        alert("length must be 10");
                        return false;
                  }
            }
      </script>
</head>
<body>
      <form  name="form" method="get" action="insert details.php" onsubmit="return validateform()">
      	  USER NAME:<input type="text" name="USERNAME" placeholder="name" required><br>
      	  EMAIL:<input type="EMAIL" name="EMAIL" placeholder="email" required><br>
          CONTACT:<input type="text" name="CONTACT" placeholder="CONTACT" required><br>
      	  Select city:<select name="city">
      	   	<option>dehradun</option>
      	   	<option>delhi</option>
      	   	<option>hisar</option>
      	   	<option>tehri</option>
      	   	<option>none</option>
      	   </select><br>
            GENDER:<input type="text" name="GENDER" required>
      	  <input type="submit" value="click here to submit" name="submit">  
      </form>
</body>
</html>