<?php

session_start();
require_once 'UserMock.php';


?>

<head>
    <title>
        Lite Project
    </title>
</head>

<style>
    * {
        margin-bottom: 20px;
    }
    form {
        border: #f9f9f9 solid 1px;
        width: 200px;
        padding: 5px;
    }
</style>

<body>
<p>Example basic work session in php 8.1</p>
<?php

if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
    if($users[$_SESSION['login']] === $_SESSION['password']) {
        echo "Вы авторизованы";
    } else {
        ?>
        <form action="signin.php" method="POST">
            <input id="input-login" name="login" type="text" placeholder="login"/> <br>
            <input id="input-password" name="password" type="password" placeholder="password"/> <br>
            <input id="btn-submit" type="submit" value="Enter">
        </form>
        <?php
    }
} else {
    ?>
<form action="signin.php" method="POST">
    <input id="input-login" name="login" type="text" placeholder="login"/> <br>
    <input id="input-password" name="password" type="password" placeholder="password"/> <br>
    <input id="btn-submit" type="submit" value="Enter">
</form>
<?php
}
?>
<a href="closePage.php">Секретная страница!</a>
</body>