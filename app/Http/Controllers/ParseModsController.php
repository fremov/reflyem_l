<?php

namespace App\Http\Controllers;

use App\Models\Mods;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;


class ParseModsController extends Controller
{

//    public function addModsFromJson()
//    {
//        // Путь к файлу с данными JSON
//        $file = public_path('data/parse/data.json');
//        // Загрузка данных из файла
//        $data = json_decode(file_get_contents($file), true);
//
//        // Записываем данные в базу данных
//        foreach ($data as $row) {
//            Mods::create([
//                'title' => $row['title'],
//                'image' => $row['image'],
//                'category' => $row['category'],
//                'date' => $row['date'],
//                'author' => $row['author'],
//                'desc' => $row['desc'],
//                'size' => $row['size'],
//                'likes' => $row['likes'],
//                'link' => $row['link']
//            ]);
//        }
//
//        echo 'Данные успешно добавлены в базу данных!';
//    }

    public function index()
    {


        $sort_col = request()->query('sort_col', 'date'); // Здесь мы получаем параметр запроса sort_col, и если его нет, то сортируем по умолчанию по дате
        $sort_dir = request()->query('sort_dir', 'desc'); // Здесь мы получаем параметр запроса sort_dir, и если его нет, то сортируем по умолчанию по убыванию
        $sort_dir = request()->query('sort_dir', 'desc'); // Здесь мы получаем параметр запроса sort_dir, и если его нет, то сортируем по умолчанию по убыванию

        $data = Mods::where('size', '<', '100')->orderBy('likes')->paginate(10);

        return view('layouts.parse', ['data' => $data]);
    }

}
