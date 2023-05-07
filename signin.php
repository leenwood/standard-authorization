<?php

session_start();
require_once 'UserMock.php';

if($users[$_POST['login']] === $_POST['password']) {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
}
?>

<a href="index.php">back to home)</a>
