<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wearon;
class DataBaseController extends Controller
{
    public function index() {
        $data = Wearon::all();
        return view('layouts.dataBase', compact('data'));
    }

}
