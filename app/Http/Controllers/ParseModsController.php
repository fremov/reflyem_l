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

        $data = Mods::paginate(12);

        return view('layouts.parse', ['data' => $data]);
    }

}
