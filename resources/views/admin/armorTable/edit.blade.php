<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->title}}</title>
    <!-- Bootstrap CDN link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <x-preloader/>
            <form action="{{ route('admin.armor.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Название:</label>
                    <input type="text" name="title" id="title" class="form-control mb-3" value="{{$data->title}}"
                           placeholder="Введите название">
                    <div class="invalid-feedback">
                        Пожалуйста, введите название.
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Описание:</label>
                    <input type="text" name="description" id="description" class="form-control mb-3"
                           value="{{$data->description}}" placeholder="Введите описание">
                    <div class="invalid-feedback">
                        Пожалуйста, введите название.
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Бонус:</label>
                    <input type="text" name="bonus" id="bonus" class="form-control mb-3" value="{{$data->bonus}}"
                           placeholder="Введите бонус сета">
                    <div class="invalid-feedback">
                        Пожалуйста, введите название.
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Местонахождение:</label>
                    <input type="text" name="location" id="location" class="form-control mb-3"
                           value="{{$data->location}}" placeholder="Введите местонахождение">
                    <div class="invalid-feedback">
                        Пожалуйста, введите название.
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">Тип брони:</label>
                    <select name="type" id="type" class="form-control mb-3">
                        <option value="{{$data->type}}">Выберите Тип</option>
                        <option value="Лёгкая броня">Лёгкая броня</option>
                        <option value="Тяжёлая броня">Тяжёлая броня</option>
                    </select>
                    <div class="invalid-feedback">
                        Пожалуйста, выберите тип.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Обновить данные</button>
                <br>
                <a href="{{ route('admin.armor') }}" class="mt-3 d-inline-block">Вернутся назад</a>
        </div>
    </div>
</div>
</body>
</html>

