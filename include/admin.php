<?php
session_start();
if (!$_SESSION['admin']) {
    header('Location: /');
}

require_once 'select_user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
<p id='session_p' class="none">asd</p>

<div class="head">
    <ul>
        <li class="personal">Персональная страница - <?= $_SESSION['admin']['login']?></li>
        <li>
            <a>Изменить данные</a>
            <ul>
                <li><a href="change_login.php">Логин</a></li>
                <li><a href="change_password.php">Пароль</a></li>
            </ul>
        </li>
        <li><a href="change_data.php">Редактировать профиль</a></li>
        <li><a>Аккаунты пользователей</a>

            <ul>
                <?php
                for($i=0;$i<count($_SESSION['user_account']);$i++):?>
                <li><a href="show-acc.php" id="<?=$_SESSION['user_account'][$i]?>"
                       onclick="document.getElementById('session_p').innerHTML=document.getElementById('<?=$_SESSION['user_account'][$i]?>').innerText;
                           localStorage.setItem('selected_user',document.getElementById('session_p').innerText);
                           ">
                        <?=$_SESSION['user_account'][$i]?></a>

                </li>
                <?php endfor; ?>
            </ul>
        </li>
        <li><a href="logout.php">Выйти</a></li>
    </ul>
</div>

<div class="info">
    <div class="img">
        <img src="../<?= $_SESSION['admin']['avatar'] ?>" style="width: 350px; height: 350px;" alt="">
        <p class="status">Администратор</p>
    </div>
    <table class="table">
        <tr>
            <td id="leftcol">Имя</td>
            <td id="rightcol"><?= $_SESSION['admin']['name']?></td>
        </tr>
        <tr>
            <td id="leftcol">Фамилия</td>
            <td id="rightcol"><?= $_SESSION['admin']['surname']?></td>
        </tr>
        <tr>
            <td id="leftcol">Отчество</td>
            <td id="rightcol"><?= $_SESSION['admin']['lastname']?></td>
        </tr>
        <tr>
            <td id="leftcol">Дата рождения</td>
            <td id="rightcol"><?= $_SESSION['admin']['date']?></td>
        </tr>
        <tr>
            <td id="leftcol">Родной город</td>
            <td id="rightcol"><?= $_SESSION['admin']['city']?></td>
        </tr>
        <tr>
            <td id="leftcol">E-mail</td>
            <td id="rightcol"><?= $_SESSION['admin']['email']?></td>
        </tr>
    </table>
</div>



</body>
</html>