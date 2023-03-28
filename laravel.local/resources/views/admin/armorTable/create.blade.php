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
                            <label for="name">Название:</label>
                            <input type="text" name="title" id="title" class="form-control mb-3" placeholder="Введите название" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите название.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Шлем:</label>
                            <input type="text" name="helmet" id="helmet" class="form-control mb-3" placeholder="Введите название шлема" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите название.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Броня:</label>
                            <input type="text" name="body_armor" id="body_armor" class="form-control mb-3" placeholder="Введите название брони" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите название.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Перчатки:</label>
                            <input type="text" name="gloves" id="gloves" class="form-control mb-3" placeholder="Введите название перчаток" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите название.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Ботинки:</label>
                            <input type="text" name="boots" id="boots" class="form-control mb-3" placeholder="Введите название ботинок" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите название.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Бонус:</label>
                            <input type="text" name="bonus" id="bonus" class="form-control mb-3" placeholder="Введите бонус сета" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите название.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Местонахождение:</label>
                            <input type="text" name="location" id="location" class="form-control mb-3" placeholder="Введите местонахождение" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите название.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Тип брони:</label>
                            <select name="type" id="type" class="form-control mb-3" required>
                                <option value="">Выберите Тип</option>
                                <option value="Лёгкая броня">Лёгкая броня</option>
                                <option value="Тяжёлая броня">Тяжёлая броня</option>
                            </select>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите тип.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Картинка:</label>
                            <select name="image" id="image" class="form-control mb-3" required>
                                <option value="">Выберите картинку</option>
                                <option value="light_armor.png">Лёгкая броня</option>
                                <option value="heavy_armor.png">Тяжёлая броня</option>
                            </select>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите картинку.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                    <a href="{{ route('admin.armor') }}" class="mt-3 d-inline-block">Вернутся назад</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmIaP9ZjWUksdQRVvox" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+J4nW9Eckv+2OY6F5NkZQ2KRg9W0C2" crossorigin="anonymous"></script>
</body>
</html>
