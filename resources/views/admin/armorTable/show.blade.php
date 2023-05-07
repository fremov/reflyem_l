<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->title}}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="">
<div class="container-fluid my-5">
    <div class="row">
        <div class="container-fluid d-flex h-100 justify-content-center align-items-center">
            <table class="table table-bordered w-75">
                <thead>
                <tr>
                    <th scope="col">Тип</th>
                    <th scope="col">Значение</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Тип</td>
                    <td>{{$data->type}}</td>
                </tr>
                <tr>
                    <td>Название</td>
                    <td>{{$data->title}}</td>
                </tr>
                <tr>
                    <td>Описание</td>
                    <td>{!! nl2br(e($data->description)) !!}</td>
                </tr>
                <tr>
                    <td>Бонус комплекта</td>
                    <td>
                        @if(is_null($data->bonus))
                            Бонус отсутвует
                        @else
                            {{$data->bonus}}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Местонахождение</td>
                    <td>{{$data->location}}</td>
                </tr>
                <tr>
                    <td>Дата создания</td>
                    <td>
                        @if(is_null($data->created_at))
                            -
                        @else
                            {{ date_format($data->created_at->setTimezone('Europe/Moscow'), 'd.m.Y H:i') }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Дата изменения</td>
                    <td>
                        @if(is_null($data->updated_at))
                            -
                        @else
                            {{ date_format($data->updated_at->setTimezone('Europe/Moscow'), 'd.m.Y H:i') }}
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid justify-content-center d-flex h-auto">
        <a href="{{ route('admin.armor') }}"
           class="btn btn-secondary">Назад</a>
    </div>
</div>
</div>
</body>
</html>
