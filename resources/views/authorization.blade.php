@extends('layouts.main')

@section('title')
    Автоизация на сайте новостей
@endsection
@section('content')
<form action="" method="post" enctype="multipart/form-data">
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите свое полное имя"><br>
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин"><br>
    <label>Почта</label>
    <input type="text" name="email" placeholder="Введите адрес электронной почты"><br>
    <label>Изображение профиля</label>
    <input type="file" name="avatar"><br>
    <label>Пароль</label>
    <input type="text" name="password" placeholder="Введите пароль"><br>
    <label>Подтверждение пароля</label>
    <input type="text" name="password_cop" placeholder="Введите подтверждение пароля"><br>

    <button type="submit">Зарегистрироваться</button>
    <p>
        У вас есть аккуант? - <a href="">авторизируйтесь</a>
    </p>

</form>
@endsection
