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
                    <form action="{{ route('admin.user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Имя пользователя:</label>
                            <input type="text" name="name" id="name" class="form-control mb-3" placeholder="Введите имя пользователя" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Почта пользователя:</label>
                            <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Введите почту пользователя." required>
                        </div>

                        <div class="form-group">
                            <label for="password">Пароль пользователя:</label>
                            <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Введите пароль пользователя." required>
                        </div>

                        <div class="form-group">
                            <label for="is_admin">Роль пользователя:</label>
                            <select name="is_admin" id="is_admin" class="form-control mb-3" required>
                                <option value="">Выберите роль</option>
                                <option value="0">Обычный пользователь</option>
                                <option value="1">Админ</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                    <a href="{{ route('admin.user') }}" class="mt-3 d-inline-block">Вернутся назад</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
