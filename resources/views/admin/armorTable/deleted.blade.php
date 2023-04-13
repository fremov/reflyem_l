<!DOCTYPE html>
<html lang="ru">
<x-head />
<body>
<div class="container mt-5">
    <h1>Удалённые записи</h1>
    <table class="table fs-5">
        <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Действие</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <x-preloader />
        @foreach($records as $record)
            <tr class="deleted-record">
                <td class="text-danger">{{ $record->title }}</td>
                <td>
                    <form action="{{ route('restore_armor', $record->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success w-50">Восстановить</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('deletedestroy_armor', $record->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-50">Удалить навсегда</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('admin.armor') }}" class="mt-3 d-inline-block">Вернуться назад</a>
</div>
</body>
</html>
