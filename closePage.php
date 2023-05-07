<?php

session_start();

require_once 'UserMock.php';

if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
    if ($users[$_SESSION['login']] === $_SESSION['password']) {
        echo "Тут секретик))";
    } else {
        echo "Нужно авторизоваться";
    }
} else {
    echo "Нужно авторизоваться";
}

?>

<a href="index.php">back to home)</a>

