<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <!-- Bootstrap CDN link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <form action="{{ route('admin.database.update', $data->id) }}" method="POST">
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
                    <label for="image">Картинка:</label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Картинка" value="{{ $data->image }}">
                </div>
                <div class="form-group">
                    <label for="location">Местонахождение:</label>
                    <input type="text" name="location" id="location" class="form-control" placeholder="Местонахождение" value="{{ $data->location }}">
                </div>
                <div class="form-group">
                    <label for="type">Тип:</label>
                    <input type="text" name="type" id="type" class="form-control" placeholder="Тип" value="{{ $data->type }}">
                </div>

                <button type="submit" class="btn btn-primary">Обновить данные</button>
            </form>

            <a href="{{ route('admin.database') }}" class="mt-3 d-inline-block">Вернутся назад</a>
        </div>
    </div>
</div>

<!-- Bootstrap CDN scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1 predisável para='' reactivate='' here='' instead)='' of='' file=""  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1r rib ='#' crossorigin="anonymous"></script>
</body>
</html>
