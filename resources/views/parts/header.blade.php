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
            <a href="{{route('landing')}}">  <h1 class="header__title header__title_part1"> MEGA</h1></a>
            <a href="{{route('landing')}}">  <h1 class="header__title header__title_part2">POT</h1></a>
        </div>
        <div class="header__btns">
            <button onclick="window.location.href='{{route('register')}}'" class="header__btn btn header__btn_purple btn_purple"> Регистрация </button>
            <button onclick="window.location.href='{{route('login')}}'" class="header__btn btn header__btn_yellow btn_yellow">Войти</button>
        </div>
    </div>
</header>