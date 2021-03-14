<?php
session_start();

include('conection.php');

if(empty($_POST['username']) || empty($_POST['password'])) {
    header('Location: index.php');
    exit();
}

$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, $_POST['password']);


$query = "SELECT * FROM users WHERE username = '{$username}' AND password = md5('{$password}')";

$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['username'] = $username;
    header('Location: panel.php');
    exit();
} else {
    $_SESSION['not_authenticated'] = true;
    header('Location: index.php');
    exit();
}
?>