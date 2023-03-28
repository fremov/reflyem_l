<!DOCTYPE html>
<html lang="en">
<x-head />
<body>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Добавление оружия</h4>
                </div>
                <div class="card-body">
                    <x-preloader />
                    <form action="{{ route('admin.database.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Название:</label>
                            <input type="text" name="name" id="name" class="form-control mb-3" placeholder="Введите название" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите название.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание:</label>
                            <input type="text" name="description" id="description" class="form-control mb-3" placeholder="Введите описание" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите описание.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="material">Материал:</label>
                            <input type="text" name="material" id="material" class="form-control mb-3" placeholder="Введите материал" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите материал.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="weight">Вес:</label>
                            <input type="number" name="weight" id="weight" class="form-control mb-3" placeholder="Введите вес" required>
                            <div class="invalid-feedback">
                                Пожалуйста, введите вес.
                            </div>
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
                            <input type="text" name="location" id="location" class="form-control mb-3" placeholder="Введите местонахождение">
                            <div class="invalid-feedback">
                                Пожалуйста, введите Местонахождение.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                    <a href="{{ route('admin.database') }}" class="mt-3 d-inline-block">Вернутся назад</a>
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
