<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактирование данных</title>
    <link rel="stylesheet" href="../css/change_data.css">
    <script src="../js/change_data.js"></script>
</head>
<body>
<div>
    <label>Редактировать имя</label>
    <input type="text" id="new-name" placeholder="Введите новое имя">
    <label>Редактировать фамилию</label>
    <input type="text" id="new-surname" placeholder="Введите новую фамилию">
    <label>Редактировать отчество</label>
    <input type="text" id="new-lastname" placeholder="Введите новое отчество">
    <label>Редактировать дату рождения</label>
    <input type="date" id="new-date">
    <label>Редактировать город</label>
    <input type="text" id="new-city" placeholder="Введите новое название">
    <label>Редактировать почту</label>
    <input type="email" id="new-email" placeholder="Введите новый E-mail">
    <label>Редактировать изображение профиля</label>
    <input type="file" id="new-avatar" onchange="new_img()">
    <span class="choice">
            <input type="button" id="btn" class="btn" value="Изменить" onclick="change()">
            <a href="profile.php" id="cancel">Отмена</a>
    </span>
    <p id="msg" class="msg none">Some Error</p>
</div>
</body>
</html>