<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeaderController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return (compact('user'));
    }
}
