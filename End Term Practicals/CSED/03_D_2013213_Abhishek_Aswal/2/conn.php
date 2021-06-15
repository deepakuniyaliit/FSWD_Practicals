<?php
$host="localhost";
$user="root";
$password="";
$db="bookstore";
 
$con=mysqli_connect($host,$user,$password,$db);
if($con){
  //  echo "Connection succesful";
  ?>
  <script>

  alert('connection susseesful');
  </script>
  <?php
}else{

    echo 'Error';
}
?>



