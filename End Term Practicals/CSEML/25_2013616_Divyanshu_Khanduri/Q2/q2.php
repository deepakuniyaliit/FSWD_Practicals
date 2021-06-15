

  $db = mysql_connect("localhost", "root", "");
  $er = mysql_select_db("ram");
  $query = "insert into names values('$name','$add1','$add2','$mail')";
  $result = mysql_query($query);
  print "<p> Person's Information Inserted </p>";
  $result = mysql_query("SELECT * FROM names");
?>

<table border="2">
   <tr>
      <th>Name</th>
      <th>Address Line 1</th>
      <th>Address Line 2 </th>
      <th>E-mail Id </th>
    </tr>
    <? 
    while ($array = mysql_fetch_row($result));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> </tr>";
    }
?>