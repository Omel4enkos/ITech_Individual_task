<?php
session_start();
if ($_SESSION['user']) {
    header('Location: include/profile.php');
}
if ($_SESSION['admin']) {
    header('Location: include/admin.php');
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
<link rel="stylesheet" href="css/main.css">
    <script src="js/main.js"></script>
</head>
<body>
<h2>Авторизация</h2>
    <div class="container">
        <div class="input">
            <input type="text" id="login" placeholder="Введите свой логин/ E-mail">
            <input type="password" id="password" placeholder="Введите пароль">
        </div>
        <input type="button" class="btn" value="Войти" onclick="SignIn()">
        <div class="margin">
            <p style="color: white">
                У Вас еще нет аккаунта? - <a href="registration.php">зарегистрируйтесь!</a>
            </p>
            <p id="msg" class="msg none">Some Error</p>
        </div>


    </div>
</body>
</html>