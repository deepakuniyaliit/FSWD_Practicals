<html>
<head>
<style>
table,th,td{
border: 1px solid black;
border-collapse: collapse;
}

</style>
<script>
function validateForm() {
  var x = document.forms["FORM"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var y = document.forms["FORM"]["contact"].value;
  if (y.length!=10) {
    alert("length must be 10");
    return false;
  }
  var le =document.getElementsByTagName("input");
  var c=0;
  for(var i=0;i<le.length;++i){
      if(le[i].type=="checkbox" && le[i].checked==true)c
    if(c<3 || c>5)
     {alert("At least 3 interests and at max 5 interests");return false;}
    return true;
 
}
</script>
</head>
<body>

<form name="FORM" action="p2.html" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="name" required><br>
  EMAIL<input type="email" name="email" required ><br>
  CONTACT<input type="text" name="contact" required><br>
  CITY<select  name="City" >
                 <option>Dehradun</option>
                 <option>Delhi</option>
                 <option>Chandigarh</option>
                 <option>Mumbai</option>
                 <option>Amritsar</option>
                 <option>Others</option>
                 </select><br>
        COURSE<select name="Course" >
               <option>BTECH</option>
                 <option>ba</option>
                 <option>ma</option>
                 <option>bsc</option>
                 <option>Diploma</option>
                 <option>other</option>
                 </select><br>
                 INTERESTS
        Programming<input type="checkbox" name="interest[]" value="Programming">
        Dance<input type="checkbox" name="interest[]" value="Dance">
        Swimming<input type="checkbox" name="interest[]" value="Swimming">
        Reading<input type="checkbox" name="interest[]" value="Reading">
        Singing<input type="checkbox" name="interest[]" value="Singing">
        Exploring<input type="checkbox" name="interest[]" value="Exploirng">
        <br>


  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>