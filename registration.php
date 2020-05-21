<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/registration.css">
    <script src="js/registration.js"></script>
</head>
<body>
<h2>Регистрация</h2>
<div class="container">
    <div class="input-left">
        <label>Имя</label>
        <input type="text" id="name" placeholder="Введите свое имя">
        <label>Фамилия</label>
        <input type="text" id="surname" placeholder="Введите свою фамилию">
        <label>Отчество</label>
        <input type="text" id="lastname" placeholder="Введите свое отчество">
        <label>Дата рождения</label>
        <input type="date" id="date">
        <label>Логин</label>
        <input type="text" id="login" placeholder="Введите свой логин">
    </div>
    <div class="input-right">
        <label>Почта</label>
        <input type="email" id="email" placeholder="Введите свой E-mail">
        <label>Родной город</label>
        <input type="text" id="city" placeholder="Введите свой город">
        <label>Изображение профиля</label>
        <input type="file" id="avatar" onchange="img()">
        <label>Пароль</label>
        <input type="password" id="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" id="password_confirm" placeholder="Подтвердите пароль">
    </div>
</div>
    <input id="btn" type="button" class="btn" value="Зарегистрироваться" onclick="reg()">
    <div class="margin">
        <p style="color: white" id="remove_p" >
            У Вас уже есть аккаунт?  - <a href="index.php">авторизируйтесь!</a>
        </p>
        <p id="msg" class="msg none">Some Error</p>
    </div>






</body>
</html>