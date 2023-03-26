<!DOCTYPE html>
<html lang="ru">
<x-head />
<body>
    <div class="container mt-5">
    <h1>Удалённые записи</h1>
    <table class="table fs-5">
        <thead>
        <tr>
            <th>Название</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr class="deleted-record">
                <td class="text-danger">{{ $record->name }}</td>
                <td>
                    <form action="{{ route('restore', $record->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success">Восставновить</button>
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
        <a href="{{ route('admin.database') }}" class="mt-3 d-inline-block">Вернутся назад</a>
        </div>
</body>
</html>
