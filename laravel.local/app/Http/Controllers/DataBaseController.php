<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wearon;
class DataBaseController extends Controller
{
    public function index() {
        $data = Wearon::all();
        $armor = Armor::all();
        return view('layouts.dataBase', compact('data', 'armor'));
    }

}
