<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Отображение страницы регистрации
    public function getRegister()
    {
        return view('auth.register');
    }
    // Обработка запроса на регистрацию
    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('login');
    }
    // Отображение страницы авторизации
    public function getLogin()
    {
        return view('auth.login');
    }
    // Обработка запроса на авторизацию
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, true)) {
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'Неверный email или пароль',
        ]);
    }
    // Выход из системы
    public function logout()
    {
        Auth::logout();
        return view('main_page.welcome');
    }
}
