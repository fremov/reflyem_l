<?php

namespace App\Http\Controllers;

use App\Models\AllItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBaseController extends Controller
{
    public function index() {
        $data = AllItems::all();
        return view('layouts.dataBase', compact('data'));
    }

}
