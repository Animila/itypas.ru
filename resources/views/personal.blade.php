@extends('layouts.main')
@section('content')
<section class="page personal-list">
    <div class="container">
        @if($personal['name'] != 'СЕКРЕТ')
        <h2>Личное дело {{explode(', ', $personal['name'])[1]}} {{explode(', ', $personal['name'])[0]}}</h2>
        <hr>
        <div class="text-center">
            <b>Личное дело №:</b> {{$info['number_id']}} <br>
            <b>Дата публикации в базе данных ITYPAS:</b> {{$info['published']}} <br>
            <b>Дата последней редакции:</b> {{$info['redacted']}} <br>
            <b>Ключ авторизации при редакции:</b> {{$info['key_auth']}} <br>
            <b>Минимальный уровень допуска к документу:</b> {{$info['class_access']}} <br>
        </div>
        <hr>

        <h3>Общая информация:</h3>
        <b>Фамилия, имя:</b> {{$personal['name']}}; <br>
        <b>Дата рождения:</b> {{$personal['birthday']}}; <br>
        <b>Должность:</b> {{$personal['position']}}; <br>
        <b>Специализация:</b> {{$personal['specialization']}}; <br>
        <b>Место работы:</b> <a href="../site.php" style="text-decoration: none; color: #0066a1;"> {{$personal['place_work']}};</a> <br> <br>

        <h3>Внешность:</h3>
        <b>Рост:</b> {{$personal['height']}}; <br>
        <b>Вес:</b> {{$personal['weight']}}; <br>
        <b>Цвет волос:</b> {{$personal['color_hair']}}; <br>
        <b>Цвет глаз:</b> {{$personal['color_eyes']}}; <br> <br>

        <h3>Психологический портрет:</h3>
        <p>{!! $personal['psych_profile'] !!}</p>

        <h3>Биография:</h3>
        @endif

        {!! $personal['bio'] !!}

        @if($personal['name'] != 'СЕКРЕТ')
        @isset($annexs)
        @foreach ($annexs as $key=>$item)
        <h3>Приложение {{$key}}</h3>
        {!! $item !!}
        @endforeach
        @endisset

        @isset($personal['add'])
            {!! $personal['add'] !!}
        @endisset
        @endif

        <a class="btn btn-secondary" role="button" href="{{route('personal_list')}}">Назад</a>
    </div>
</section>
@endsection
