<?php
session_start();
if (!$_SESSION['user_account']) {
    header('Location: admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Пользователь</title>
    <script src="../js/delete_acc.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../css/show-acc.css">

</head>
<body>
<div class="head">
    <ul>
        <li class="personal">Персональная страница - &nbsp;<p id="user" class="none">qwe</p></li>
        <li class="btn-li">
            <input type="button" class="btn" value="Удалить аккаунт" onclick="delete_acc()">
        </li>
        <li><a href="admin.php" onclick="<?php unset($_SESSION['user_account'])?>">Назад</a></li>
    </ul>
</div>

<div class="info">
    <div class="img">
        <img id="avatar" style="width: 350px; height: 350px">
        <p class="status">Пользователь</p>
    </div>
    <table class="table">
        <tr>
            <td id="leftcol">Имя</td>
            <td id="rightcol" class="name">qeqweqweq</td>
        </tr>
        <tr>
            <td id="leftcol">Фамилия</td>
            <td id="rightcol" class="surname">qeqweqweq</td>
        </tr>
        <tr>
            <td id="leftcol">Отчество</td>
            <td id="rightcol" class="lastname">qeqweqweq</td>
        </tr>
        <tr>
            <td id="leftcol">Дата рождения</td>
            <td id="rightcol" class="date">qeqweqweq</td>
        </tr>
        <tr>
            <td id="leftcol">Родной город</td>
            <td id="rightcol" class="city">qeqweqweq</td>
        </tr>
        <tr>
            <td id="leftcol">E-mail</td>
            <td id="rightcol" class="email">qeqweqweq</td>
        </tr>
    </table>
</div>
<script src="../js/select_user.js"></script>
</body>
</html>
</body>
</html>