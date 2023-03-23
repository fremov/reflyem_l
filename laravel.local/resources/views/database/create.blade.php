<form action="{{ route('database.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Название">
    <input type="text" name="description" placeholder="Описание">
    <input type="text" name="material" placeholder="Материал">
    <input type="number" name="weight" placeholder="Вес">
    <input type="text" name="image" placeholder="Картинка">
    <input type="text" name="location" placeholder="Местонахождение">
    <input type="text" name="type" placeholder="Тип">
    <button type="submit">Добавить</button>
</form>
