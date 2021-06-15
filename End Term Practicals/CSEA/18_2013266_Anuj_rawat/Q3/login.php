<?php session_start(); ?>
<?php include('./userDB.php'); ?>

<?php
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE `username`='$username' AND `password` ='$password'";

    $result = mysqli_query($connection, $query);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location:index.php");
    } else {
        echo "Wrong id or password";
    }
    if (!$result) {
        die('Query Failed');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        #main {
            width: 50%;
            margin: auto;
        }
    </style>
</head>

<body>

    <div id="main">
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
    </div>



</body>

</html>