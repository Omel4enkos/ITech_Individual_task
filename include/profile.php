<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
        <div class="head">
            <ul>
                <li class="personal">Персональная страница - <?= $_SESSION['user']['login']?></li>
                <li>
                    <a>Изменить данные</a>
                        <ul>
                            <li><a href="change_login.php">Логин</a></li>
                            <li><a href="change_password.php">Пароль</a></li>
                        </ul>
                </li>
                <li><a href="change_data.php">Редактировать профиль</a></li>
                <li><a href="logout.php">Выйти</a></li>
            </ul>
        </div>

    <div class="info">
        <div class="img">
            <img src="../<?= $_SESSION['user']['avatar'] ?>" style="width: 350px; height: 350px;" alt="">
            <p class="status">Пользователь</p>
        </div>
        <table class="table">
            <tr>
                <td id="leftcol">Имя</td>
                <td id="rightcol"><?= $_SESSION['user']['name']?></td>
            </tr>
            <tr>
                <td id="leftcol">Фамилия</td>
                <td id="rightcol"><?= $_SESSION['user']['surname']?></td>
            </tr>
            <tr>
                <td id="leftcol">Отчество</td>
                <td id="rightcol"><?= $_SESSION['user']['lastname']?></td>
            </tr>
            <tr>
                <td id="leftcol">Дата рождения</td>
                <td id="rightcol"><?= $_SESSION['user']['date']?></td>
            </tr>
            <tr>
                <td id="leftcol">Родной город</td>
                <td id="rightcol"><?= $_SESSION['user']['city']?></td>
            </tr>
            <tr>
                <td id="leftcol">E-mail</td>
                <td id="rightcol"><?= $_SESSION['user']['email']?></td>
            </tr>
        </table>
    </div>

</body>
</html>