<?php
$servername = "localhost";
$username = "username";
$password = "12345";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



//create database
$sql = "CREATE DATABASE WebPractical";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}


//create table
$sql = "CREATE TABLE User (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
contact VARINT(10),
gender VARCHAR(10),
city VARCHAR(20)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table User created successfully";
} else {
  echo "Error creating table: " . $conn->error;



}

?>