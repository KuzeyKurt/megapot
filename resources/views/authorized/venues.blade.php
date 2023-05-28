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
                        <h2 class="preview__title">Компьютерные клубы, арены, лаунжи  </h2>
                        <div class="preview__box">
                        @foreach($venues as $venue)
                        {{-- <p>{{$venue->name}}</p> --}}
                                <div class="preview__card-container">
                                    <div class="preview__card">
                                        {{-- <img src= {{$venue->name}} alt="Counter-Strike_logo"> --}}
                                        {{-- <p>{{$venue->name}}</p> --}}
                                        <img src="{{asset($venue->image_link)}}" alt="">
                                        <div class="info-card">{{$venue->name}}, {{$venue->city}}, {{$venue->address}}</div>
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
