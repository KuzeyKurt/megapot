<!DOCTYPE html>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../build/styles.css">
    @vite(['resources/css/app.css'])
    <title>MegaPot</title>
</head>
<body class="page">
  @include('parts/header')
   
  <main class="page">
    <div class="page__main-block main-block">
        <div class="main-block__container _container">
            <div class="main-block__body">
                <div class="main-block__half">
                    <h1 class="main-block__title">Компьютерные клубы и киберспортивные турниры</h1>
                    <div class="main-block__text">СОБЕРИ КОМАНДУ</div>
                    <div class="main-block__text">ПОДАЙТЕ ЗАЯВКУ НА УЧАСТИЕ В ТУРНИРЕ</div>
                    <div class="main-block__text">ВЫИГРЫВАЙ И ПОБЕЖДАЙ</div>
                    <div class="main-block__btn btn btn_purple">Заполнить форму</div>
                </div>
                <div class="main-block__half right-half">
                    <div class="right-half__image">
                        <img class="right-half__image_rear" src="{{asset('images/img_for_page1.jpg')}}" alt="cover">
                        <img class="right-half__image_front" src="./images/img_for_page1.jpg" alt="cover">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-block__image _ibg">
            <img src="./images/bg_mainpage1.jpg" alt="cover">
        </div>
    </div>
    <section class="page__services services">
        <div class="services__container _container">
            <div class="services__title">
                <span class="services__title_part1">MEGA</span><span class="services__title_part2">POT</span>
                <span class="services__title_part3"> - ЭТО</span>
            </div>
            <div class="services__body">
                <div class="services__column">
                    <div class="services__item item-service">
                        <div class="item-service__icon">
                            <img src="../images/services/sword.svg" alt="tournaments">
                        </div>
                        <h3 class="item-service__title">ТУРНИРЫ</h3>
                        <div class="item-service__text">Найди и выбери турнир и выиграй в нём</div>
                    </div>
                </div>
                <div class="services__column">
                    <div class="services__item item-service">
                        <div class="item-service__icon">
                            <img src="./images/services/team.svg" alt="team">
                        </div>
                        <h3 class="item-service__title">КОМАНДА</h3>
                        <div class="item-service__text">Собери свою команду мечты и выигрывай</div>
                    </div>
                </div>
                <div class="services__column">
                    <div class="services__item item-service">
                        <div class="item-service__icon">
                            <img src="./images/services/progress.svg" alt="progress">
                        </div>
                        <h3 class="item-service__title">ПРОГРЕСС</h3>
                        <div class="item-service__text">Наблюдайте за своей статистикой</div>
                    </div>
                </div>
                <div class="services__column">
                    <div class="services__item item-service">
                        <div class="item-service__icon">
                            <img src="./images/services/gamepad.svg" alt="compClubs">
                        </div>
                        <h3 class="item-service__title">КОМПЬЮТЕРНЫЕ КЛУБЫ</h3>
                        <div class="item-service__text">Список лучших КК, киберарен, геймлаунжей в твоем городе</div>
                    </div>
                </div>
            </div>
            <div class="services__btns">
                <button  class="services__btn btn btn_purple " href="#" class="lsfnkjd">Заполнить форму</button>
            </div>
        </div>
    </section>
</main>
    
</body>
</html>