<?php
session_start();
unset($_SESSION['loggedin']);

echo 'You have cleaned session';
header('Refresh: 2; URL = login.php');
?>
