<!DOCTYPE html>
<html lang="en">
<x-head />
<body>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Добавление брони</h4>
                </div>
                <div class="card-body">
                    <x-preloader />
                    <form action="{{ route('admin.armor.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Название:</label>
                            <input type="text" name="title" id="title" class="form-control mb-3" placeholder="Введите название" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание:</label>
                            <textarea name="description" id="description" class="form-control mb-3" placeholder="Введите описание брони" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="bonus">Бонус:</label>
                            <input type="text" name="bonus" id="bonus" class="form-control mb-3" placeholder="Введите бонус сета" required>
                        </div>
                        <div class="form-group">
                            <label for="location">Местонахождение:</label>
                            <input type="text" name="location" id="location" class="form-control mb-3" placeholder="Введите местонахождение" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Тип брони:</label>
                            <select name="type" id="type" class="form-control mb-3" required>
                                <option value="">Выберите Тип</option>
                                <option value="Лёгкая броня">Лёгкая броня</option>
                                <option value="Тяжёлая броня">Тяжёлая броня</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                    <a href="{{ route('admin.armor') }}" class="mt-3 d-inline-block">Вернутся назад</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
