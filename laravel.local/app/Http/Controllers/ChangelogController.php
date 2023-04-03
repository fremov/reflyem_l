<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExampleExport; // Файл экспорта шаблона

class ChangelogController extends Controller
{
    public function index(Request $request)
    {
        $path = storage_path('app/public/Changelog.xlsx');

        // Используйте статический метод load() для загрузки Excel файла
        $data = Excel::load($path, function($reader) {
            $reader->select(['name', 'email', 'phone']); // Выберите только 3 столбца
        })->get();
        dd($data);
        // Вывод данных в шаблон Blade
        return view('example', compact('data'));
    }
}
