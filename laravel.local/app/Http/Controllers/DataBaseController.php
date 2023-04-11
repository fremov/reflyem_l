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
        $destract = json_decode(file_get_contents(public_path('data/destract.json')), true);;
        $change = json_decode(file_get_contents(public_path('data/change.json')), true);;
        $conjura = json_decode(file_get_contents(public_path('data/conjura.json')), true);;
        $illision = json_decode(file_get_contents(public_path('data/illision.json')), true);;
        $restore = json_decode(file_get_contents(public_path('data/restore.json')), true);;


        return view('layouts.dataBase', compact('data', 'changelog', 'destract', 'change', 'conjura', 'illision', 'restore'));
    }

}
