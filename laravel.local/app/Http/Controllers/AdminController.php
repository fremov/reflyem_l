<?php

namespace App\Http\Controllers;

use App\Models\Wearon;
use App\Models\Armor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index() {
        $data = Wearon::all()->count();
        $data_armor = Armor::all()->count();
        return view('admin.index', compact('data', 'data_armor'));
    }
    public function tables() {
        return view('admin.wearonTable');
    }

}
