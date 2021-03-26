<?php
include('configuration.php')
?>

<?php
    $sql = "select * from `users`";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
?>
        <table>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>contact</th>
              <th>gender</th>
              <th>city</th>
            </tr>
<?php
                    while($row = $result->fetch_assoc()){
?>
                <tr>
                  <th><?php echo $row['id'] ?></th>
                  <th><?php echo $row['username'] ?></th>
                  <th><?php echo $row['email'] ?></th>
                  <th><?php echo $row['contact'] ?></th>
                  <th><?php echo $row['gender'] ?></th>
                  <th><?php echo $row['city'] ?></th>
                </tr>
<?php
    }
?>
        </table>
<?php
    }
?>


<!DOCTYPE html>
<head>
    <title>user details</title>
</head>
<html>
  <body>

  </body>
</html>