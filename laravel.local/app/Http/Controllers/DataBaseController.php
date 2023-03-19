<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wearon;
class DataBaseController extends Controller
{
    public function show_data() {
        $data = Wearon::paginate(6);
//        $data = Wearon::withTrashed()->where('id', 1)->restore();
        return view('database.dataBase', ['data' => $data]);
    }

    public function index() {
        return view('database.dataBase', [Wearon::table('wearon')->paginate(4)]);
    }
}
