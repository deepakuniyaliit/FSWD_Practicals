	
  $db = mysql_connect("localhost", "root", "");
  $er = mysql_select_db("ram");
  $query = "insert into names values('$Book','$BookName','$AuthorName','ISBNNumber','$PublisherName','$year','$volume','$booktype')";
  $result = mysql_query($query);
  print "<p> Person's Information Inserted </p>";
  $result = mysql_query("SELECT * FROM names");
?>

<table border="2">
   <tr>
      <th>bookid</th>
      <th>BookName</th>
      <th>AuthoName</th>
      <th>ISBNNumber</th>
      <th>PublisherName</th> 
      <th>year</th>
      <th>volume</th>
      <th>booktype</th>
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
        print "</td> <td>";
        echo $array[4]; 
        print "</td> <td>";
        echo $array[5]; 
        print "</td> <td>";
        echo $array[6]; 
        print "</td> <td>";
        echo $array[7]; 
        print "</td> </tr>";
    }
?>