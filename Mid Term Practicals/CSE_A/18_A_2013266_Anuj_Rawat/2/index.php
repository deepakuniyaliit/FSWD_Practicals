<!-- Creating entry into Table -->
<?php
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email =  $_POST['email'];
    $contact =   $_POST['contact'];
    $gender =  $_POST['gender'];
    $city =  $_POST['city'];


    $connection = mysqli_connect('localhost', 'root', '', 'webpractical');
    if (!$connection) {
        die("Database connection failed");
    }

    if (
        strlen($username) == 0 ||
        strlen($email) == 0 ||
        strlen($contact) == 0 ||
        strlen($contact) == 0 ||
        strlen($city) == 0
    ) {
        die("Empty Cell");
    } else if (strlen($contact) != 10) {
        die("Contact not 10 digit");
    }

    $query = "INSERT INTO users(username, email, contact, gender, city) ";
    $query .= "VALUES ('$username', '$email', '$contact', '$gender', '$city')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
    }

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

</head>

<script>
    function validate() {
       alert("hi");
    }
</script>

<body>
    <div class="container">

        <div class="col-sm-6">
            <form name="myform" action="index.php" method="POST" onsubmit="return validate()">


                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" name="contact" class="form-control">
                </div>

                <div>
                    Select Gender -
                    Male <input type="radio" name="gender" value="M" checked>
                    Female <input type="radio" name="gender" value="F">
                    Other <input type="radio" name="gender" value="O">
                </div>

                <div>
                    <label for="city">Choose a city:</label>

                    <select name="city" id="city">
                        <option value="Mumbai">Mumbai</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Jaipur">Jaipur</option>
                        <option value="Mussoori">Mussoori</option>
                        <option value="Nanital">Mussoori</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Pune">Pune</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Lucknow">Lucknow</option>
                    </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">

                <br>
                <br>
                Output
                <div class="container">

                    <div class="">

                        <?php
                        while (mysqli_fetch_row($result)) {
                            $row = mysqli_fetch_assoc($result);
                            print_r($row);
                            echo '<br>';
                        }
                        ?>
                    </div>
                </div>



            </form>
        </div>
    </div>
</body>

</html>