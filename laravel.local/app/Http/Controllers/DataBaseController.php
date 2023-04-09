<?php

namespace App\Http\Controllers;

use App\Models\AllItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBaseController extends Controller
{
    public function index() {
        $data = AllItems::all();
        $changelog = json_decode(file_get_contents(public_path('data/merged_data1.json')), true);;
        return view('layouts.dataBase', compact('data', 'changelog'));
    }

}
