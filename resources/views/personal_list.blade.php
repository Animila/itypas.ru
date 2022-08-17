@extends('layouts.main')
@section('content')
<section class="page personal-lists">
    <div class="container">
        <h2>Сотрудники корпорации</h2>

        <div class="card mb-3" style="max-width: 100%; border: 1px solid black">
            <div class="card-header">Административный состав</div>
            <div class="card-body">
                <ul class="list-group">
                    <a href="{{route('personal', '83972-93877-52252')}}" class="list-group-item list-group-item-action">- Кирит Купер — руководитель Корпорации</a>
                    <a href="{{route('personal', '54243-35447-18874')}}" class="list-group-item list-group-item-action">- Роберт Черняк — заместитель руководителя Корпорации</a>
                    <a href="{{route('personal', '69825-37934-01024')}}" class="list-group-item list-group-item-action">- Эмили Вуд — начальник Службы Внутренней Безопасности</a>
                    <a href="{{route('personal', '73694-65781-92653')}}" class="list-group-item list-group-item-action">- Лассе Бек — руководитель ITYPAS Jurisdiction</a>
                    <a href="{{route('personal', '85964-68842-23652')}}" class="list-group-item list-group-item-action">- Никита Жульен — руководитель ITYPAS Projects and Development</a>
                    <a href="{{route('personal', '49202-14555-09242')}}" class="list-group-item list-group-item-action">- Йост Вербек — руководитель ITYPAS Military</a>
                    <a href="{{route('personal', '57816-52908-77413')}}" class="list-group-item list-group-item-action">- Джуди Кейн — руководитель ITYPAS Expeditions</a>
                </ul>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 100%; border: 1px solid black">
            <div class="card-header">Руководители отделов</div>
            <div class="card-body">
                <ul class="list-group">
                    <a href="{{route('personal', '53344-12121-34243')}}" class="list-group-item list-group-item-action">- Томас Робертсон — руководитель отдела психологии, Комплекс №48</a>
                    <a href="{{route('personal', '')}}" class="list-group-item list-group-item-action disabled">- Мин Ю — руководитель отдела вирусологии ITYPAS Projects and Development</a>
                    <a href="{{route('personal', '')}}" class="list-group-item list-group-item-action disabled">- Елена Еремеева — руководитель службы безопасности, Комплекс №48</a>
                    <a href="{{route('personal', '09795-02949-00296')}}" class="list-group-item list-group-item-action">- Янне Ван Донген — руководитель медицинской службы, Комплекс №48</a>
                    <a href="{{route('personal', '')}}" class="list-group-item list-group-item-action disabled">- Скрудж Мелдин — руководитель отдела административной и бухгалтерской службы, Комплекс №48</a>
                    <a href="{{route('personal', '')}}" class="list-group-item list-group-item-action disabled">- Джошуа Флеминг — руководитель отдела содержания биологических проявлений, Комплекс №48</a>
                </ul>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 100%; border: 1px solid black">
            <div class="card-header">Сотрудники</div>
            <div class="card-body">
                <ul class="list-group">
                    <a href="{{route('personal', '')}}" class="list-group-item list-group-item-action disabled">- Кэтрин Роуз — биолог, отдел биоинженерии</a>
                    <a href="{{route('personal', '')}}" class="list-group-item list-group-item-action disabled">- Маллиган Квай — психолог, специалист по содержанию</a>
                    <a href="{{route('personal', '')}}" class="list-group-item list-group-item-action disabled">- Диоген Купер — лаборант, биоинженерный отдел</a>
                    <a href="{{route('personal', '')}}" class="list-group-item list-group-item-action disabled">- Вал Нейна — ботаник, ботанический сад Комплекса №48</a>
                    <a href="{{route('personal', '69825-37934-02804')}}" class="list-group-item list-group-item-action">- Сергей Самойлов — специалист по непредвиденным ситуациям СВБ</a>
                </ul>
            </div>
        </div>

    </div>
</section>
@endsection
