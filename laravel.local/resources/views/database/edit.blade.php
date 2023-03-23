<form action="{{ route('database.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Название" value="{{ $data->name }}">
    <input type="text" name="description" placeholder="Описание" value="{{ $data->description }}">
    <input type="text" name="material" placeholder="Материал" value="{{ $data->material }}">
    <input type="number" name="weight" placeholder="Вес" value="{{ $data->weight }}">
    <input type="text" name="image" placeholder="Картинка" value="{{ $data->image }}">
    <input type="text" name="location" placeholder="Картинка" value="{{ $data->location }}">
    <input type="text" name="type" placeholder="Тип" value="{{ $data->type }}">

    <button type="submit">Обновить данные</button>
</form>

<a href="{{ route('database.index') }}">Вернутся назад</a>
