<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->name}}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <x-preloader />
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
                    <td>ID</td>
                    <td>{{$data->id}}</td>
                </tr>
                <tr>
                    <td>Имя пользователя</td>
                    <td>{{$data->name}}</td>
                </tr>
                <tr>
                    <td>Почта пользователя</td>
                    <td>{{$data->email}}</td>
                </tr>
                <tr>
                    <td>Дата создания</td>
                    <td>{{ date_format($data->created_at->setTimezone('Europe/Moscow'), 'd.m.Y H:i') }}</td>
                </tr>
                <tr>
                    <td>Дата изменения</td>
                    <td>{{ date_format($data->updated_at->setTimezone('Europe/Moscow'), 'd.m.Y H:i') }}</td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="container-fluid d-flex h-100 justify-content-center">
                <a href="{{ route('admin.user') }}"
                   class="btn btn-secondary pt-2" style="height: 45px;">Назад</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
