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
    <title>MegaPot - Log in</title>
</head>
<body class="page">
    @include('parts/header') 
    
    <main class="main">
        <div class="form__container">
            <div class="form__page">
                <div class="form__title form__title_yellow">
                    <h1 class="">ВХОД</h1>
                </div>
                <form class="form" action="#">
                    <div class="form-item">
                        <label class="form-item__label" for="email">E-mail:</label>
                        <input class="form-item__input form-item__input_yellow" type="email" id="email" name="email" placeholder="Введите e-mail">
                    </div>

                    <div class="form-item">
                        <label class="form-item__label" for="password">Пароль:</label>
                        <input class="form-item__input form-item__input_yellow" type="password" id="password" name="password" placeholder="Придумайте пароль">
                    </div>
                    
                    <div class="form-item">
                        <label class="form-item__ifYouHave">Ещё нет аккаунта? Тогда можно
                             <button class="form-item__ifYouHave_purple" onclick="showLoginForm()">Войти</button>
                        </label>
                    </div>

                    <div class="form-item form-item_last-child">
                        <button type="submit" class="btn btn_yellow">Войти</button>
                    </div>
                </form>

                <!-- <script>
                    function showLoginForm() {
                    // здесь можно добавить код для отображения формы входа
                    }
                </script> -->
            </div>
        </div>
    </main>
    
</body>
</html>