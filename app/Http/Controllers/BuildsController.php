<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildsController extends Controller
{
    public function index() {
        return view('layouts.builds');
    }
}
