<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wearon;
class DataBaseController extends Controller
{
    public function index() {
        $data = Wearon::paginate(6);
        return view('database.dataBase', compact('data'));
    }

    public function create() {
        return view('database.create');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
           'name' => 'required|max:50',
            'description' => 'required',
            'material' => 'required',
            'weight' => 'required',
            'image' => 'required',
            'location' => 'required',
            'type' => 'required',
        ]);
        $data = Wearon::create($validatedData);
        return redirect('/database')->with('success', 'Оружие успешно добавлено');
    }
    public function show($id) {
        $data = Wearon::findOrFail($id);
        return view('database.show', compact('data'));
    }
    public function edit($id) {
        $data = Wearon::findOrFail($id);
        return view('database.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'max:50'.$id,
            'description',
            'material',
            'weight',
            'image',
            'location',
            'type',
        ]);

        Wearon::whereId($id)->update($validatedData);

        return redirect('/database')->with('success', 'Оружие обновленно успешно');
    }
    public function destroy($id)
    {
        $data = Wearon::findOrFail($id);
        $data->delete();

        return redirect('/database')->with('success', 'Оружие успешно удалено');
    }
}
