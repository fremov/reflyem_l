<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserTableController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin.user_database', compact('data'));
    }

    public function create()
    {
        $data = User::all();
        return view('admin.userTable.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'is_admin' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
//        dd($validatedData);
       User::create($validatedData);

        return redirect()->route('admin.user')
            ->with('success', 'Пользователь успешно создан!');
    }
    public function show($id) {
        $data = User::findOrFail($id);
        return view('admin.userTable.show', compact('data'));
    }
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.userTable.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'max:255'.$id,
            'email' => 'unique:users,email,',
            'is_admin' => 'int',
            'password' => 'max:25',
        ]);

        if (!empty($request->input('password'))) {
            $validatedData['password'] = Hash::make($request->input('password'));
        }

        $id->update($validatedData);

        return redirect()->route('admin.user')->with('success', 'Данные пользователя успешно обновлены!');
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.user')->with('success', 'Пользователь успешно удалён!');
    }

    public function deletedRecords()
    {
        $records = User::onlyTrashed()->get();
        return view('admin.userTable.deleted', compact('records'));
    }

    public function restore($id)
    {
        $record = User::onlyTrashed()->findOrFail($id);
        $record->restore();

        return redirect()->back()->with('success', 'Запись успешно восстановлена!');
    }

    public function deletedestroy($id)
    {
        $record = User::onlyTrashed()->findOrFail($id);
        $record->forceDelete();

        return redirect()->back()->with('success', 'Запись успешно удалена навсегда!');
    }
}
