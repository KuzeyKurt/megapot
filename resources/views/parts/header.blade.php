<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">
    <link rel="stylesheet" href="resources/css/app.css">
    @vite(['resources/css/app.css'])
    
    <script defer src="./log-form.js"></script>
    
</head>
<header class="header">
    <div class="header__container">
        <div class="header__logo">
            <h1 class="header__title header__title_part1">MEGA</h1>
            <h1 class="header__title header__title_part2">POT</h1>
        </div>
        <div class="header__btns">
            <button class="header__btn header__btn_purple">Регистрация</button>
            <button class="header__btn header__btn_yellow">Войти</button>
        </div>
    </div>
</header>