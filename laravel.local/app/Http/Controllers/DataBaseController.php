<?php

namespace App\Http\Controllers;

use App\Models\AllItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBaseController extends Controller
{
    public function index() {
        $data = AllItems::all();
        $changelog = json_decode(file_get_contents(public_path('data/changelog.json')), true);;
        $spells = json_decode(file_get_contents(public_path('data/spells.json')), true);;
        if ($changelog || $spells !== null) {
            return view('layouts.dataBase', compact('data', 'changelog', 'spells'));
        } else // Если данные были некорректны, возвращаем ошибку
            return response()->json(['error' => 'Не удалось загрузить данные'], 500);
    }

}
