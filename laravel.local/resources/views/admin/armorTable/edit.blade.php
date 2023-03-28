<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->title}}</title>
    <!-- Bootstrap CDN link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <x-preloader />
            <form action="{{ route('admin.armor.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Название:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Название" value="{{ $data->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Описание:</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Описание" value="{{ $data->description }}">
                </div>
                <div class="form-group">
                    <label for="material">Материал:</label>
                    <input type="text" name="material" id="material" class="form-control" placeholder="Материал" value="{{ $data->material }}">
                </div>
                <div class="form-group">
                    <label for="weight">Вес:</label>
                    <input type="number" name="weight" id="weight" class="form-control" placeholder="Вес" value="{{ $data->weight }}">
                </div>
                <div class="form-group">
                    <label for="image">Тип:</label>
                    <select name="type" id="type" class="form-control mb-3" required>
                        <option value="">Выберите Тип</option>
                        <option value="Кинжал">Кинжал</option>
                        <option value="Лук">Лук</option>
                        <option value="Булава">Булава</option>
                        <option value="Копьё">Копьё</option>
                        <option value="Топор">Топор</option>
                    </select>
                    <div class="invalid-feedback">
                        Пожалуйста, выберите вес.
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">Картинка:</label>
                    <select name="image" id="image" class="form-control mb-3" required>
                        <option value="">Выберите картинку</option>
                        <option value="dagger.png">Кинжал</option>
                        <option value="bow.png">Лук</option>
                        <option value="mace.png">Булава</option>
                        <option value="spear.png">Копьё</option>
                        <option value="axe.png">Топор</option>
                    </select>
                    <div class="invalid-feedback">
                        Пожалуйста, выберите вес.
                    </div>
                </div>
                <div class="form-group">
                    <label for="location">Местонахождение:</label>
                    <input type="text" name="location" id="location" class="form-control" placeholder="Местонахождение" value="{{ $data->location }}">
                </div>
                <button type="submit" class="btn btn-primary">Обновить данные</button>
            </form>

            <a href="{{ route('admin.armor') }}" class="mt-3 d-inline-block">Вернутся назад</a>
        </div>
    </div>
</div>
</body>
</html>

