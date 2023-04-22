<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>База знаний</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">

    <link rel="shortcut icon" href="{{asset('images/slidkiy_rulet.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/slidkiy_rulet.png')}}">
    <link rel="stylesheet" href="{{asset('style/scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('style/dataBase.css')}}">
    <!-- Подключите bootstrap и jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-xxxxxxxxx"
            crossorigin="anonymous"></script>

    <!-- Добавьте стили для фиксированной кнопки -->
    <style>
        #scrollTopButton {
            display: none; /* кнопка изначально скрыта */
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            cursor: pointer;
        }
    </style>
</head>
<x-header/>
<body class="layout-boxed mt-5 h-auto position-relative text-white"
      style="
          background-image: url('{{asset('images/661452.png')}}');
          background-repeat: no-repeat;
          background-position: center center;
          background-attachment: fixed;
          ">
<x-preloader/>
<div class="container-fluid d-flex h-100 justify-content-center w-75">
    <div class="card-body">
        <h1>База знаний</h1>
        <div class="row">
            <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                     aria-orientation="vertical">
                    <a class="nav-link active h2" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home"
                       role="tab" aria-controls="vert-tabs-home" aria-selected="true">Снаряжение</a>
                    <a class="nav-link h2" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile"
                       role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Перки</a>
                    <a class="nav-link h2" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages"
                       role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Заклинания</a>
                    <a class="nav-link h2" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                       role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Список изменений</a>
                </div>
            </div>
            <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                    <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel"
                         aria-labelledby="vert-tabs-home-tab">
                        {{--Табилца со шмотками--}}
                        <div class="card-body">
                            <table id="example1"
                                   class="table
                                   table-bordered
                                   border border-5
                                    border-dark
                                    text-white
                                    fst-italic
                                    fs-5"
                                   style="text-shadow: 1px 1px 2px black;
                                    background-color: rgba(0, 0, 0, 0.6)!important;
">
                                <thead>
                                <tr>
                                    <th class="fw-bold border-right border-dark border-3">Название</th>
                                    <th class="fw-bold">Описание</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td class="border-bottom border-3 border-dark fw-bolder">{{$item->title}}</td>
                                        <td class="border-bottom border-3 border-dark fw-bolder">{!! nl2br(e($item->description)) !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="fw-bold border-right border-dark border-3">Название</th>
                                    <th class="fw-bold">Описание</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                         aria-labelledby="vert-tabs-profile-tab">
                        <div class="accordion" id="accordionExample">
                            <h2>Изменение</h2>
                            @foreach ($alteration_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <h2>Разрушение</h2>
                            @foreach ($destruction_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <h2>Колдавство</h2>
                            @foreach ($conjuration_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <h2>Зачарование</h2>
                            @foreach ($enchanting_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <h2>Иллюзия</h2>
                            @foreach ($illusion_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <h2>Восстановление</h2>
                            @foreach ($restoration_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Стрельба</h2>
                            @foreach ($archery_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Блокирование</h2>
                            @foreach ($block_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Тяжёлая броня</h2>
                            @foreach ($heavy_Armor_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Одноручное оружие</h2>
                            @foreach ($one_Handed_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Кузнечное дело</h2>
                            @foreach ($smithing_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Двуручное оружие</h2>
                            @foreach ($two_Handed_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Алхимия</h2>
                            @foreach ($alchemy_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Лёгкая броня</h2>
                            @foreach ($light_Armor_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Взлом</h2>
                            @foreach ($lockpicking_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Карманные кражи</h2>
                            @foreach ($pickpocket_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Скрытность</h2>
                            @foreach ($sneak_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <h2>Красноречие</h2>
                            @foreach ($speech_perks as $key => $data)
                                <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                                    <div class="card-header" id="heading{{ $key }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                                {{ $data['value'] }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                                        <div class="card-body">
                                            {!! nl2br(e($data['comment'])) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        </div>



                    <div class="tab-pane fade h-auto" id="vert-tabs-messages" role="tabpanel"
                         aria-labelledby="vert-tabs-messages-tab">
                        <div class="card-body">
                            <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                            <div id="accordion">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            <a class="d-block w-100 collapsed" data-toggle="collapse"
                                               href="#collapseOne" aria-expanded="false">
                                                Разрушение
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <table class="table text-white fs-5">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($destract as $row)
                                                    <tr>
                                                        @foreach ($row as $key => $value)
                                                            @switch($value)
                                                                @case('НОВИЧОК')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('УЧЕНИК')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('АДЕПТ')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('ЭКСПЕРТ')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('МАСТЕР')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('Магия крови')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('Разрушение')
                                                                <td class="fw-bold h2">{{ $value }}</td>
                                                                @break
                                                                @default
                                                                <td>{!! nl2br(e($value)) !!}</td>
                                                            @endswitch
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-success">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            <a class="d-block w-100 collapsed" data-toggle="collapse"
                                               href="#collapseTwo" aria-expanded="false">
                                                Изменение
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <table class="table fs-5 text-white">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($change as $row)
                                                    <tr>
                                                        @foreach ($row as $key => $value)
                                                            @switch($value)
                                                                @case('НОВИЧОК')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('УЧЕНИК')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('АДЕПТ')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('ЭКСПЕРТ')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('МАСТЕР')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('Изменение')
                                                                <td class="fw-bold h2">{{ $value }}</td>
                                                                @break
                                                                @case('Чародейская ярость')
                                                                <td class="fw-bold h2">{{ $value }}</td>
                                                                @break
                                                                @default
                                                                <td>{!! nl2br(e($value)) !!}</td>
                                                            @endswitch
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            <a class="d-block w-100" data-toggle="collapse" href="#collapseThree"
                                               aria-expanded="true">
                                                Колдавство
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <table class="table text-white fs-5">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($conjura as $row)
                                                    <tr>
                                                        @foreach ($row as $key => $value)
                                                            @switch($value)
                                                                @case('НОВИЧОК')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('УЧЕНИК')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('АДЕПТ')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('ЭКСПЕРТ')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('МАСТЕР')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('Колдовство')
                                                                <td class="fw-bold h2">{{ $value }}</td>
                                                                @break
                                                                @default
                                                                <td>{!! nl2br(e($value)) !!}</td>
                                                            @endswitch
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-success">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            <a class="d-block w-100 collapsed" data-toggle="collapse"
                                               href="#collapseFor" aria-expanded="false">
                                                Иллюзия
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFor" class="collapse" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <table class="table text-white fs-5">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($illision as $row)
                                                    <tr>
                                                        @foreach ($row as $key => $value)
                                                            @switch($value)
                                                                @case('НОВИЧОК')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('УЧЕНИК')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('АДЕПТ')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('ЭКСПЕРТ')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('МАСТЕР')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('Иллюзия')
                                                                <td class="fw-bold h2">{{ $value }}</td>
                                                                @break
                                                                @default
                                                                <td>{!! nl2br(e($value)) !!}</td>
                                                            @endswitch
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            <a class="d-block w-100 collapsed" data-toggle="collapse"
                                               href="#collapseFive" aria-expanded="false">
                                                Восстановление
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <table class="table text-white fs-5">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($restore as $row)
                                                    <tr>
                                                        @foreach ($row as $key => $value)
                                                            @switch($value)
                                                                @case('НОВИЧОК')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('УЧЕНИК')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('АДЕПТ')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('ЭКСПЕРТ')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('МАСТЕР')
                                                                <td class="fw-bold fs-5">{{ $value }}</td>
                                                                @break
                                                                @case('Восстановление')
                                                                <td class="fw-bold h2">{{ $value }}</td>
                                                                @break
                                                                @default
                                                                <td>{!! nl2br(e($value)) !!}</td>
                                                            @endswitch
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel"
                         aria-labelledby="vert-tabs-settings-tab">
                        {{--Список изменений--}}
                        <table id="example1"
                               class="table table-bordered border border-5 border-dark text-white fs-5 fst-italic"
                               style="text-shadow: 1px 1px 2px black;
                               background-color: rgba(0, 0, 0, 0.6)!important;
">
                            <tbody>
                            @foreach ($changelog as $sheet_name => $sheet_data)
                                <tr>
                                    <td class="border-bottom border-3 border-dark fw-bolder">
                                        <h2>{{ $sheet_data['name'] }}</h2></td>
                                </tr>
                                @foreach ($sheet_data['data'] as $row)
                                    <tr>
                                        <td class="border-bottom border-3 border-dark fw-bolder">{{ $loop->iteration }}</td>
                                        <td class="border-bottom border-3 border-dark fw-bolder">{{ $row['Unnamed: 1'] }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Добавьте следующий скрипт -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>


<button class="btn btn-info" id="scrollTopButton">Наверх</button>
<!-- Добавьте следующий скрипт -->
<script>
    // Получаем кнопку и добавляем обработчик клика
    const scrollTopButton = document.getElementById("scrollTopButton");
    scrollTopButton.addEventListener("click", function () {
        document.documentElement.scrollTop = 0; // Поднимаем страницу вверх
    });

    // Показываем/скрываем кнопку при скролле страницы
    window.addEventListener("scroll", function () {
        if (document.documentElement.scrollTop > 100) {
            scrollTopButton.style.display = "block";
        } else {
            scrollTopButton.style.display = "none";
        }
    });
</script>
</body>
</html>
