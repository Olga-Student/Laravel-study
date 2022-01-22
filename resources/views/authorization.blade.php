<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Форма авторизации и регистрации</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите свое полное имя">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Почта</label>
    <input type="text" name="email" placeholder="Введите адрес электронной почты">
    <label>Изображение профиля</label>
    <input type="file" name="avatar">
    <label>Пароль</label>
    <input type="text" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="text" name="password_cop" placeholder="Введите подтверждение пароля">



    <button type="submit">Зарегистрироваться</button>
    <p>
        У вас есть аккуант? - <a href="">авторизируйтесь</a>
    </p>

</form>
</body>
</html>
