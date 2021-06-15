<?php
$conn=mysqli_connect('localhost','root','');
$query='create database library';
mysqli_query($conn,$query)
mysqli_select_db($conn,'library')
  
?>