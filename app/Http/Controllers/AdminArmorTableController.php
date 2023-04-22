<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use Illuminate\Http\Request;

class AdminArmorTableController extends Controller
{
    public function index() {
        $data = Armor::all();
        return view('admin.armor_database', compact('data'));
    }

    public function create() {
        $data = Armor::all();
        return view('admin.armorTable.create', compact('data'));
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
            'bonus' => 'required',
            'location' => 'required',
        ]);
        $data = Armor::create($validatedData);
       //dd($data);
        return redirect(route('admin.armor'))->with('success', 'Оружие успешно добавлено');
    }
    public function show($id) {
        $data = Armor::findOrFail($id);
        return view('admin.armorTable.show', compact('data'));
    }
    public function edit($id) {
        $data = Armor::findOrFail($id);
        return view('admin.armorTable.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'max:250'.$id,
            'type' => 'max:250',
            'description' => 'max:250',
            'bonus' => 'max:250',
            'location' => 'max:250',
        ]);

        Armor::whereId($id)->update($validatedData);

        return redirect(route('admin.armor'))->with('success', 'Оружие обновленно успешно');
    }
    public function destroy($id)
    {
        $data = Armor::findOrFail($id);
        $data->delete();

        return redirect(route('admin.armor'))->with('success', 'Оружие успешно удалено');
    }

    public function deletedRecords()
    {
        $records = Armor::onlyTrashed()->get();
        return view('admin.armorTable.deleted', compact('records'));
    }

    public function restore($id)
    {
        $record = Armor::onlyTrashed()->findOrFail($id);
        $record->restore();

        return redirect()->back()->with('success', 'Запись успешно восстановлена!');
    }

    public function deletedestroy($id)
    {
        $record = Armor::onlyTrashed()->findOrFail($id);
        $record->forceDelete();

        return redirect()->back()->with('success', 'Запись успешно удалена навсегда!');
    }
}
