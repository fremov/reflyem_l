<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->name}}</title>
    <!-- Bootstrap CDN link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <x-preloader />
            <form action="{{ route('admin.database.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Название:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Название" value="{{ $data->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Описание:</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Описание">{{ $data->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="material">Материал:</label>
                    <input type="text" name="material" id="material" class="form-control" placeholder="Материал" value="{{ $data->material }}">
                </div>
                <div class="form-group">
                    <label for="type">Тип:</label>
                    <select name="type" id="type" class="form-control mb-3">
                        <option>{{$data->type}}</option>
                        <option value="Кинжал">Кинжал</option>
                        <option value="Лук">Лук</option>
                        <option value="Булава">Булава</option>
                        <option value="Копьё">Копьё</option>
                        <option value="Топор">Топор</option>
                    </select>
                    <div class="invalid-feedback">
                        Пожалуйста, выберите тип оружия.
                    </div>
                </div>
                <div class="form-group">
                    <label for="location">Местонахождение:</label>
                    <input type="text" name="location" id="location" class="form-control" placeholder="Местонахождение" value="{{ $data->location }}">
                </div>
                <button type="submit" class="btn btn-primary">Обновить данные</button>
            </form>

            <a href="{{ route('admin.database') }}" class="mt-3 d-inline-block">Вернутся назад</a>
        </div>
    </div>
</div>
</body>
</html>
