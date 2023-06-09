<x-head/>
<x-header />
<body class="mt-5"
      style="background-color: #1a202c!important;
         width: auto;
        height: auto;
    "
>
<div>

    <style>
        .custom-card, h1 {
            background-color: #000000; /* Задает фоновый цвет */
            border: 2px solid #ffd700; /* Задает ширину и стиль границы */
            box-shadow: 2px 2px 10px #008080; /* Задает тень блока */
            text-align: center; /* Задает выравнивание текста в блоке */
            font-family: Comic Sans MS, cursive, sans-serif; /* Задает шрифт текста */
            color: #ffffff; /* Задает цвет текста */
            padding: 15px; /* Задает внутренний отступ блока */
            margin-bottom: 0;
        }

        body {
            background-image: {{asset('images/3690802.jpg')}};
        }
        .card .card-img-top {
            height: 350px; /* можно изменить на любое другое значение */
            width: auto;
            object-fit: cover; /* скрываем выход изображения за границы контейнера */
        }
    </style>
    <x-preloader />
    <div class="container-fluid">
        <div class="row justify-content-center">
        @foreach($data as $mod)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 h-auto">
                    <div class="card custom-card">
                        <img src="{{$mod['image']}}" class="card-img-top rounded-2" alt="image">
                        <div class="card-body">
                            <h3 class="card-title">{{ $mod['title'] }}</h3>
                            <ul class="list-group list-group-flush">
                                <hr>
                                <li class="list-group-item"><span
                                        class="font-weight-bold">Описание:</span> {{ $mod['desc'] }}</li>
                                <li class="list-group-item"><span class="font-weight-bold">Категория:</span>
                                    @if(!$mod['category'])
                                        отсутвует
                                    @else
                                        {{ $mod['category'] }}
                                    @endif
                                </li>
                                <li class="list-group-item"><span
                                        class="font-weight-bold">Дата:</span> {{ str_replace('Uploaded:', '', $mod['date']) }}
                                </li>
                                <li class="list-group-item"><span
                                        class="font-weight-bold">Автор:</span> {{ str_replace('Author:', '', $mod['author']) }}
                                </li>
                                <li class="list-group-item"><span
                                        class="font-weight-bold">Вес мода: {{$mod['size']}}</li>
                                <li class="list-group-item"><span
                                        class="font-weight-bold">Лайки: {{$mod['likes']}}</li>
                            </ul>
                            <a href="{{ $mod['link'] }}" target="_blank" class="btn btn-primary mt-3">Ссылка на мод</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex w-100 align-items-center justify-content-center ">
                {{ $data->links('components.pagination') }}
            </div>
        </div>
    </div>
</div>
</body>

