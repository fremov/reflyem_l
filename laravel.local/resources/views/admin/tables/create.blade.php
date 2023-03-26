{{--<form action="{{ route('database.store') }}" method="POST">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="Название">--}}
{{--    <input type="text" name="description" placeholder="Описание">--}}
{{--    <input type="text" name="material" placeholder="Материал">--}}
{{--    <input type="number" name="weight" placeholder="Вес">--}}
{{--    <input type="text" name="image" placeholder="Картинка">--}}
{{--    <input type="text" name="location" placeholder="Местонахождение">--}}
{{--    <input type="text" name="type" placeholder="Тип">--}}
{{--    <button type="submit">Добавить</button>--}}
{{--</form>--}}
<x-head />
<form action="{{ route('admin.database.store') }}" method="POST" class="form-horizontal">
    @csrf
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Название</label>
        <div class="col-sm-10">
            <input type="text" name="name" id="name" class="form-control" placeholder="Название">
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Описание</label>
        <div class="col-sm-10">
            <input type="text" name="description" id="description" class="form-control" placeholder="Описание">
        </div>
    </div>
    <div class="form-group">
        <label for="material" class="col-sm-2 control-label">Материал</label>
        <div class="col-sm-10">
            <input type="text" name="material" id="material" class="form-control" placeholder="Материал">
        </div>
    </div>
    <div class="form-group">
        <label for="weight" class="col-sm-2 control-label">Вес</label>
        <div class="col-sm-10">
            <input type="number" name="weight" id="weight" class="form-control" placeholder="Вес">
        </div>
    </div>
    <div class="form-group">
        <label for="image" class="col-sm-2 control-label">Картинка</label>
        <div class="col-sm-10">
            <input type="text" name="image" id="image" class="form-control" placeholder="Картинка">
        </div>
    </div>
    <div class="form-group">
        <label for="location" class="col-sm-2 control-label">Местонахождение</label>
        <div class="col-sm-10">
            <input type="text" name="location" id="location" class="form-control" placeholder="Местонахождение">
        </div>
    </div>
    <div class="form-group">
        <label for="type" class="col-sm-2 control-label">Тип</label>
        <div class="col-sm-10">
            <input type="text" name="type" id="type" class="fo
rm-control" placeholder="Тип">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>
    </div>
    <a href="{{ route('admin.database') }}">Вернутся назад</a>
</form>
