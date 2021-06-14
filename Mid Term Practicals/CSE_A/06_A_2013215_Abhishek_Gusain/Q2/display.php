<?php
include('config.php');
?>

<?php

if(isset($_POST['username'])){
    $username = $_POST['username'];
}
else {
    $username = '';
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
else {
    $email = '';
}
if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
}
else {
    $gender = '';
}
if(isset($_POST['city'])){
    $city = $_POST['city'];
}
else {
    $city = '';
}
if(isset($_POST['contact'])){
    $number = $_POST['contact'];
}
else {
    $branch = '';
}
?>
<?php
$output = "SELECT `id`,`username`,`email`,`contact`,`gender`,`city` FROM `users`";
$result = mysqli_query($connection, $output);

?>



<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td>Id</td>
                <td>Usernmae</td>
                <td>Email</td>
                <td>Contact</td>
                <td>Gender</td>
                <td>City</td>
            </tr>
            <tbody>
                <?php
                    while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['city']?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>