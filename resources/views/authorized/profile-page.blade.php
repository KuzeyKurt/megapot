<!DOCTYPE html>

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="../build/styles.css"> --}}
    @vite(['resources/css/app.css'])
    <title>Профиль</title>
</head>
<body class="page">
  <div class="wrapper">
    {{-- <header class="header">
        <div class="header__container _container">
            <div class="header__logo">
                <h1 class="header__title header__title_part1">MEGA</h1>
                <h1 class="header__title header__title_part2">POT</h1>
            </div>
            <div class="header__btns">
                <button href="#" class="header-btns-svg">
                    <svg href="" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 13.125C15 11.1359 15.7902 9.22822 17.1967 7.8217C18.6032 6.41518 20.5109 5.625 22.5 5.625C24.4891 5.625 26.3968 6.41518 27.8033 7.8217C29.2098 9.22822 30 11.1359 30 13.125C30 15.1141 29.2098 17.0218 27.8033 18.4283C26.3968 19.8348 24.4891 20.625 22.5 20.625C20.5109 20.625 18.6032 19.8348 17.1967 18.4283C15.7902 17.0218 15 15.1141 15 13.125ZM15 24.375C12.5136 24.375 10.129 25.3627 8.37087 27.1209C6.61272 28.879 5.625 31.2636 5.625 33.75C5.625 35.2418 6.21763 36.6726 7.27252 37.7275C8.32742 38.7824 9.75816 39.375 11.25 39.375H33.75C35.2418 39.375 36.6726 38.7824 37.7275 37.7275C38.7824 36.6726 39.375 35.2418 39.375 33.75C39.375 31.2636 38.3873 28.879 36.6291 27.1209C34.871 25.3627 32.4864 24.375 30 24.375H15Z" fill="#FFB800"/>
                    </svg>
                </button>
                <button href="#" class="header-btns-svg">
                    <svg width="40" height="45" viewBox="0 0 40 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_947_67)">
                        <path d="M30.0002 3.33331H10.0002C9.55814 3.33331 9.13421 3.50891 8.82165 3.82147C8.50909 4.13403 8.3335 4.55795 8.3335 4.99998V20L16.6668 13.3333V18.3333H26.6668V21.6666H16.6668V26.6666L8.3335 20V35C8.3335 35.442 8.50909 35.8659 8.82165 36.1785C9.13421 36.4911 9.55814 36.6666 10.0002 36.6666H30.0002C30.4422 36.6666 30.8661 36.4911 31.1787 36.1785C31.4912 35.8659 31.6668 35.442 31.6668 35V4.99998C31.6668 4.55795 31.4912 4.13403 31.1787 3.82147C30.8661 3.50891 30.4422 3.33331 30.0002 3.33331Z" fill="#A347FF"/>
                        </g>
                        <defs>
                        <filter id="filter0_d_947_67" x="-4" y="0" width="48" height="48" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_947_67"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_947_67" result="shape"/>
                        </filter>
                        </defs>
                    </svg> 
                </button>
            </div>  
        </div>
    </header> --}}
    @include('authorized/parts/header')
    <main class="profile-page">
        <div class="profile-page__main-block profile-main-block">
            <div class="profile-main-block__container ">
                @include('authorized/parts/side-panel')
                <div class="profile-main-block__body preview">
                                        {{-- <div>{{$user->name}}</div> --}}
                    <div class="preview__container">
                        <h2 class="preview__title">Профиль</h2>
                        <div class="preview__box">
                            <div class="preview__card-container user-info">
                                <div class="user-info">Имя - {{$user->name}}</div>
                                <div class="user-info">Электронная почта - {{$user->email}}</div>
                                <div class="user-info">Дата регистрации - {{$user->created_at}}</div>
                                <div class="user-info">Ваш ID - {{$user->user_id}}</div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
    
</body>
</html>
