<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>
        {{$data['title']}}
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all">
    <meta name="description" content="{{$data['description']}}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<header class="header fixed-top">
    <nav class="navbar navbar-expand-lg" style="background-color: #0066a1">
        <div class="container">
            <a href="/" class="navbar-brand" style="color: white;">ITYPAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navContent">

                <ul class="navbar-nav mr-auto mb-3 bg-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">О компании</a>
                        <ul class="dropdown-menu" aria-labelledby="navDrop">
                            <li><a href="{{route('about')}}" class="dropdown-item">Описание</a></li>
                            <li><a href="{{route('site')}}" class="dropdown-item">Филиалы</a></li>
                            <li><a href="{{route('structure')}}" class="dropdown-item">Структура</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navDropPod" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">Подразделения</a>
                        <ul class="dropdown-menu" aria-labelledby="navDropPod">
                            <li><a href="{{route('pad')}}" class="dropdown-item">ITYPAS Projects and Development</a></li>
                            <li><a href="{{route('military')}}" class="dropdown-item">ITYPAS Military</a></li>
                            <li><a href="{{route('jurisdiction')}}" class="dropdown-item">ITYPAS Jurisdiction</a></li>
                            <li><a href="{{route('expedition')}}" class="dropdown-item">ITYPAS Expeditions</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('personal_list')}}" class="nav-link" style="color: white;">Персонал</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact')}}" class="nav-link" style="color: white;">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('news')}}" class="nav-link" style="color: white;">Новости</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')

<footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">itypas.ru</a>
    </div>
    <!-- Copyright -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
