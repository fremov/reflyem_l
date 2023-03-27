<?php

namespace App\Http\Controllers;

use App\Models\Wearon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index() {
        $data = Wearon::all()->count();

        return view('admin.index', compact('data'));
    }
    public function tables() {
        return view('admin.wearonTable');
    }

}
