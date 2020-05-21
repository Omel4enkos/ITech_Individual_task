<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменение логина</title>
    <link rel="stylesheet" href="../css/change_data.css">
    <script src="../js/change_login.js"></script>
</head>
<body>
    <div>
        <label>Старый логин</label>
        <input type="text" id="old-login" placeholder="Введите свой старый логин">
        <label>Новый логин</label>
        <input type="text" id="new-login" placeholder="Введите новый логин">
        <span class="choice">
            <input type="button" id="btn" class="btn" value="Изменить" onclick="change()">
            <a href="profile.php" id="cancel">Отмена</a>
        </span>
        <p id="msg" class="msg none">Some Error</p>
    </div>
</body>
</html>