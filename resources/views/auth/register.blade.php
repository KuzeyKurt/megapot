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
        <title>MegaPot - Registration</title>
    </head>
@include('parts/header')
<body class="page">
   
    <main class="main">
        <div class="form__container">
            <div class="form__page">
                <div class="form__title form__title_purple">
                    <h1 class="">РЕГИСТРАЦИЯ</h1>
                </div>
                <form class="form" action="{{route('register')}}" method="POST" novalidate>
                  @csrf


                    <div class="form-item">
                        <label class="form-item__label" for="name">Имя:</label>
                        <input class="form-item__input form-item__input_purple" type="text" id="name" name="name" placeholder="Введите имя">
                    </div>

                    <div class="form-item">
                        <label class="form-item__label" for="email">E-mail:</label>
                        <input class="form-item__input form-item__input_purple" type="email" id="email" name="email" placeholder="Введите e-mail">
                    </div>
                    
                    <div class="form-item">
                        <label class="form-item__label" for="nickname">Никнейм:</label>
                        <input class="form-item__input form-item__input_purple" type="text" id="nickname" name="nickname" placeholder="Придумайте никнейм">
                    </div>

                    <div class="form-item">
                        <label class="form-item__label" for="birthday">Дата рождения:</label>
                        <input class="form-item__input form-item__input_purple" type="text" id="date" name="date" placeholder="Введите дату рождения" onfocus="(this.type='date')" onblur="(this.type='text')">
                    </div>
                    
                    <div class="form-item">
                        <label class="form-item__label" for="password">Пароль:</label>
                        <input class="form-item__input form-item__input_purple" type="password" id="password" name="password" placeholder="Придумайте пароль">
                    </div>
                    
                    <div class="form-item">
                        <label class="form-item__label" for="confirmPassword">Подтвердить пароль:</label>
                        <input class="form-item__input form-item__input_purple" type="password" id="confirmPassword" name="confirmPassword" placeholder="Введите пароль еще раз">
                    </div>

                    <div class="form-item">
                        <label class="form-item__ifYouHave">Уже есть аккаунт? Тогда можно 
                            <button class="form-item__ifYouHave_yellow" onclick="showLoginForm()">Войти</button>
                        </label>
                    </div>

                    <div class="form-item form-item_last-child">
                        <button type="submit" class="btn btn_purple">Создать аккаунт</button>
                    </div>
                </form>

              
            </div>
        </div>
    </main>
    
</body>
</html>