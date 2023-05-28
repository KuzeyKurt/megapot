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
    
    @include('authorized/parts/header')
    <main class="profile-page">
        <div class="profile-page__main-block profile-main-block">
            <div class="profile-main-block__container ">
                @include('authorized/parts/side-panel')
                <div class="profile-main-block__body preview">
                                           
                    <div class="preview__container">
                        <h2 class="preview__title">Турниры  </h2>
                        <div class="preview__box">
                            @foreach($tournments as $tournment)
                            <div class="preview__card-container">
                                <div class="preview__card">
                                    <img src= {{asset($tournment->image_link)}} alt="Counter-Strike_logo">
                                    <div class="info-card">{{$tournment->name}}, {{$tournment->prize_found}} РУБ. <button class="btn_purple btn tar">Подать заявку</button></div>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
    
</body>
</html>
