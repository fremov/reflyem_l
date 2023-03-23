<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('style/ataBase.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta property="og:title" content="Reflyem">

    <meta name="description" content="Reflyem это сборка модов для Skyrim Special Edition,
                                        которая меняет множество аспектов игры и создана для того,
                                        чтобы ваше путешествие по миру Скайрима было
                                        максимально комфортным и приятным.">
    <meta property="og:description" content="Reflyem это сборка модов для Skyrim Special Edition,
                                        которая меняет множество аспектов игры и создана для того,
                                        чтобы ваше путешествие по миру Скайрима было
                                        максимально комфортным и приятным.">
    <meta name="keywords" content="Reflyem, Рефлием, Скайрим спешл эдишен, сборка модов, моды, reflyem">
    <meta name="yandex-verification" content="e29c8116acf9e039" />
    <link rel="shortcut icon" href="{{asset('images/slidkiy_rulet.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/slidkiy_rulet.png')}}">
    <title> Reflyem DataBase </title>
</head>
<body>
{{--Хеадер--}}
<x-header />
{{--Хеадер--}}
<!-- Background image -->
<div class="bg-image" style="background-image: url('{{asset('images/Frem.png')}}');height: 937px!important;">
    <div class="h-100 d-flex justify-content-center align-items-center">
            <div class="tab-pane fade show active text-info fs-5 fw-bold" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                <!--поиск -->
                <div class="container-fluid d-flex h-100 justify-content-center mb-3" style="width: 350px;">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" />
                            <label class="form-label" for="form1">Search</label>
                        </div>
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            <!--таблица в первом пилсе-->
                <div class="container-fluid d-flex justify-content-center h-100">
                <table class="table bg-black text-white table-bordered text-center justify-content-center align-items-center w-75 ms-auto" style="width: 1200px!important;">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th class="text-start" scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Материал</th>
                        <th scope="col">Вес
                            <i class="fa-solid fa-caret-down"></i>
                            <i class="fa-solid fa-caret-up"></i>
                        </th>
                        <th scope="col">Местонахождение</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td style="width: 15%; height: 45px"><img style="height: 60px;" src="{{asset('images/' . $item->image)}}" alt="img"></td>
                        <td style="width: 5%; height: 45px!important;">{{$item->name}}</td>
                        <td style="width: 45%;">{{$item->description}}</td>
                        <td style="width: 15%;">{{$item->material}}</td>
                        <td style="width: 5%;">{{$item->weight}}</td>
                        <td style="width: 15%;">{{$item->location}}</td>
                        <td>
                            <a href="{{ route('database.show', $item->id) }}">Show</a>
                            <a href="{{ route('database.edit', $item->id) }}">Edit</a>
                            <form action="{{ route('database.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
{{--                    <div class="fw-bold text-white fs-5 shadow-5-strong container-fluid h-100 w-25 me-auto d-flex justify-content-center flex-column align-items-center ms-3" style="width: 250px!important;">--}}
{{--                        <div class="form-check">--}}
{{--                                <h2>Сортировка</h2>--}}
{{--                            <form action="dataBase" method="post">--}}
{{--                                <label class="form-check-label">--}}
{{--                                    <input type="radio" class="form-check-input" name="wearon" value="spear">--}}
{{--                                </label> Копья<br>--}}
{{--                                <label class="form-check-label">--}}
{{--                                    <input type="radio" class="form-check-input" name="wearon" value="dagger">--}}
{{--                                </label> Кинжалы<br>--}}
{{--                                <label class="form-check-label">--}}
{{--                                    <input type="radio" class="form-check-input" name="wearon" value="axe">--}}
{{--                                </label> Топоры<br>--}}
{{--                                <label class="form-check-label">--}}
{{--                                    <input type="radio" class="form-check-input" name="wearon" value="wearon">--}}
{{--                                </label> Всё оружие<br>--}}
{{--                                <input type="submit" class="btn btn-primary mt-3" value="Подтвердить">--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="container-fluid d-flex justify-content-center h-100">
                    {{$data->onEachSide(2)->links()}}
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>
