<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LPcalcController extends Controller
{
    public function index() {
        return view('layouts.calcLP');
    }
}
