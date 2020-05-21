<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменение пароля</title>
    <link rel="stylesheet" href="../css/change_data.css">
    <script src="../js/change_password.js"></script>
</head>
<body>
<div>
    <label>Старый пароль</label>
    <input type="password" id="old-password" placeholder="Введите свой старый пароль">
    <label>Новый пароль</label>
    <input type="password" id="new-password" placeholder="Введите новый пароль">
    <label>Повторите пароль</label>
    <input type="password" id="password-confirm" placeholder="Подтвердите пароль">
    <span class="choice">
            <input type="button" class="btn" id="btn" value="Изменить" onclick="change()">
            <a href="profile.php" id="cancel">Отмена</a>
        </span>
    <p id="msg" class="msg none">Some Error</p>
</div>
</body>
</html>