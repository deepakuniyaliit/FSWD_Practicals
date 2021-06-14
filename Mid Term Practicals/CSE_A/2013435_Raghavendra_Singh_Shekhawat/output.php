<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,tr,th,td{
        border : 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<body>
    
</body>
</html>

<?php
    include ('templates/header.php');
    // Output table of the student details
    $conn = mysqli_connect('localhost', 'raghavendra', 'aabbccdd', 'student_details');
    if(!$conn){
        echo "Connection error" . mysqli_connect_error();
    }
    $fetch_data = "SELECT * FROM `users`";
    $result = $conn -> query($fetch_data);

    echo "<table> 
            <tbody>
            <tr> 
                <th>Username</th> 
                <th>Email</th> 
                <th>Gender</th> 
                <th >City</th> 
            </tr>" ; 
    if($result->num_rows > 0){
        while($row = $result -> fetch_assoc()) {
            // echo "id: " . $row["id"]. "Username: " . $row["username"] . "Gender " . $row["gender"] . "City " . $row["city"];
            $session_id = $row['id'];
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";  
            echo "<td>" . $row['city'] . "</td>";
            echo "<td> <a href='edit.php?id=$session_id'> Edit</a> </td>";
            echo "<td> <input type='submit' value='delete'></td>";          
            echo "</tr>";
        }
    echo "</tbody>";
    echo "</table>"; 
    }

?>