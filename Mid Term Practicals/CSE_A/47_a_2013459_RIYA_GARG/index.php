<?php include("configration.php"); ?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $gender=$_POST['gender'];

    $sqli = "INSERT INTO `users`(``username`, `email`, `contact`, `gender`, `city`) VALUES ('$username', '$email', '$contact','$gender','$city')";
    mysqli_query($conn, $sqli);
}
else{
    echo "Please click submit button to submit the data..";
}
?>

<!DOCTYPE html>

<html>
    <head>
        <style>
            th, td, table {
                border: 1px solid black;
            }

            table {
                width: 75%;
                text-align: center;
                margin: 20px auto;
                padding: auto;
                border-collapse: collapse;
            }
        </style>

    </head>

    <body>
        <form action="index.php" method="GET" name="form" id="form">
            Name: <input type="text" id="name" name="name" placeholder=" Enter Your Name" required><br><br>
            E-Mail: <input type="email" id="email" name="email" placeholder="abc@gmail.com" required><br><br>
            Contact: <input type="text" id="number" name="number" placeholder="Contact " minlength="10" maxlength="10" required onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));"><br><br>
            Gender:<input type="radio" id="male" name="gender" value="Male" required>
                <label for="male"> Male </label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female"> Female </label>
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other"> Other </label>
                <br><br>
            <label for="city">City: </label>
                <select name="city" id="city" required>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Dehradun">Dehradun</option>
                    <option value="Nanital">Nanital</option>
                    <option value="chennai">chennai</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Pune">Pune</option>
                    <option value="Banglore">Banglore</option>
                    <option value="Hyderabad">Hyderabad</option>
                </select>
            <input type="submit" name="submit" value="Click Here To Submit Your Data">
            <br><br>
        <?php
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);

            if ((mysqli_num_rows($result) > 0)) { ?>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while (($row = mysqli_fetch_assoc($result))) { ?>
                            <tr>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["username"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td><?php echo $row["gender"] ?></td>
                                <td><?php echo $row["city"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>   
            <?php } else {
                echo "No data found";
            }
        ?>
    </body>
</html>