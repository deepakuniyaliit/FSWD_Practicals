<?php
$sql = 'INSERT INTO User (name, email,gender, number, city )
VALUES ($name, $email,$gender, $number, $city)'';

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>