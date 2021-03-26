<?php
   include('config.php');
   ?>
<?php
   $sql = "SELECT * FROM `users`";
   $result= mysqli_query($conn,$sql);
   if($result->num_rows > 0){
   
   ?>
   if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = // processing codes here
    unset $data;
}
<html lang="en">
   <head>
      <title>USER DETAILS</title>
   </head>
   <body>
      <table border="1" align ="center">
         <h1 align ="center"> <b > USER DETAILS </b></h1>
         <thead>
            <tr>
               <th>ID</th>
               <th>Userame</th>
               <th>Email</th>
               <th>CONTACT</th>
               <th>Gender</th>
               <th>City</th>
            </tr>
         </thead>
         <tbody>
            <?php
               while($row = $result->fetch_array()){?>
            <tr>
               <td><?php echo $row[0]?></td>
               <td><?php echo $row[1]?></td>
               <td><?php echo $row[2]?></td>
               <td><?php echo $row[3]?></td>
               <td><?php echo $row[4]?></td>
               <td><?php echo $row[5]?></td>
            </tr>
            <?php } 
               ?>
         </tbody>
      </table>
      <?php }
         ?>
</html>