<?php
 $servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = 'SELECT * from BookTable';
if( !( $selectRes = sql( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
<table border="2">
  <thead>
    <tr>
      <th>Book Name</th>
      <th>Author Name</th>
      <th>ISBN</th>
      <th>Publisher Name</th>
      <th>Number of Pages</th>
      <th>Book Type</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['BookName']}</td><td>{$row['AuthorName']}</td><td>{$row['ISBN']}</td><td>{$row['PublisherName']}</td><td>{$row['NumPages']}</td><td>{$row['BookType']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
<?php
    }
    $conn->close();
?>