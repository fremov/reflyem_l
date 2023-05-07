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
            <form action="{{ route('admin.user.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Имя пользователя:</label>
                    <input type="text" name="name" id="name" class="form-control mb-3" value="{{$data->name}}">
                </div>

                <div class="form-group">
                    <label for="email">Почта пользователя:</label>
                    <input type="email" name="email" id="email" class="form-control mb-3" value="{{$data->email}}">
                </div>

                <div class="form-group">
                    <label for="is_admin">Роль пользователя:</label>
                    <select name="is_admin" id="is_admin" class="form-control mb-3">
                        <option value="">Выберите роль</option>
                        <option value="0">Обычный пользователь</option>
                        <option value="1">Админ</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Обновить данные</button>
            </form>

            <a href="{{ route('admin.user') }}" class="mt-3 d-inline-block">Вернутся назад</a>
        </div>
    </div>
</div>
</body>
</html>
