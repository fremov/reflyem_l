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
            <table class="table table-bordered w-75">
                <thead>
                <tr>
                    <th scope="col">Тип</th>
                    <th scope="col">Значение</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Картинка</td>
                    <td><img style="height: auto;" src="{{asset('images/' . $data->image)}}" alt="img">
                </tr>
                <tr>
                    <td>Тип</td>
                    <td>{{$data->type}}</td>
                </tr>
                <tr>
                    <td>Название</td>
                    <td>{{$data->name}}</td>
                </tr>
                <tr>
                    <td>Описание</td>
                    <td>{{$data->description}}</td>
                </tr>
                <tr>
                    <td>Материал</td>
                    <td>{{$data->material}}</td>
                </tr>
                <tr>
                    <td>Вес</td>
                    <td>{{$data->weight}}</td>
                </tr>
                <tr>
                    <td>Местонахождение</td>
                    <td>{{$data->location}}</td>
                </tr>
                <tr>
                    <td>Дата создания</td>
                    <td>{{$data->created_at}}</td>
                </tr>
                <tr>
                    <td>Дата обновления</td>
                    <td>{{$data->updated_at}}</td>
                </tr>
                </tbody>
            </table>
            <a href="{{ route('admin.database') }}"
               class="btn btn-secondary">Назад</a>
        </div>
    </div>
</div>
</body>
</html>
