<?php
$db = mysql_connect("localhost", "root", "");
  $er = mysql_select_db("book store");
  $result = mysql_query("SELECT * FROM book detail");
?>

<table border="2">
   <tr>
      <th>Book Id</th>>
      <th>Book Name </th>
      <th>Author</th>
      <th>ISBN </th>
      <th>Publisher </th>
      <th>Publication Year </th>
      <th>Pages </th>
      <th>Book Type </th>
    </tr>
</table>
    <?php
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
        print "<tr> <td>";
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
?>