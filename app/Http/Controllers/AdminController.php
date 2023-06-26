<?php

namespace App\Http\Controllers;

use App\Models\AllItems;
use App\Models\Mods;
use App\Models\User;
use App\Models\Wearon;
use App\Models\Armor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index() {
        $data_mods = Mods::all()->count();
        $data_users = User::all()->count();
        $all_items = AllItems::all()->count();
        return view('admin.index', compact('data_mods','data_users', 'all_items'));
    }
}
