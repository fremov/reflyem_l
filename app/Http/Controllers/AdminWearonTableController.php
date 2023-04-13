<?php

namespace App\Http\Controllers;

use App\Models\Wearon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminWearonTableController extends Controller
{

    public function index() {
        $data = Wearon::all();
        return view('admin.database', compact('data'));
    }

    public function create() {
        $data = Wearon::all();
        return view('admin.wearonTable.create', compact('data'));
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:65535',
            'material' => 'required',
            'weight' => 'required',
            'image' => 'max:2048',
            'location' => 'required',
            'type' => 'max:100',
        ]);
        $data = Wearon::create($validatedData);
//        dd($data);
        return redirect(route('admin.database'))->with('success', 'Оружие успешно добавлено');
    }
    public function show($id) {
        $data = Wearon::findOrFail($id);
        return view('admin.wearonTable.show', compact('data'));
    }
    public function edit($id) {
        $data = Wearon::findOrFail($id);
        return view('admin.wearonTable.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'max:250'.$id,
            'description' => 'max:250',
            'material' => 'max:250',
            'weight' => 'max:250',
            'image' => 'max:250',
            'location' => 'max:250',
            'type' => 'max:250',
        ]);

        Wearon::whereId($id)->update($validatedData);

        return redirect(route('admin.database'))->with('success', 'Оружие обновленно успешно');
    }
    public function destroy($id)
    {
        $data = Wearon::findOrFail($id);
        $data->delete();

        return redirect(route('admin.database'))->with('success', 'Оружие успешно удалено');
    }

    public function deletedRecords()
    {
        $records = Wearon::onlyTrashed()->get();
        return view('admin.wearonTable.deleted', compact('records'));
    }

    public function restore($id)
    {
        $record = Wearon::onlyTrashed()->findOrFail($id);
        $record->restore();

        return redirect()->back()->with('success', 'Запись успешно восстановлена!');
    }

    public function deletedestroy($id)
    {
        $record = Wearon::onlyTrashed()->findOrFail($id);
        $record->forceDelete();

        return redirect()->back()->with('success', 'Запись успешно удалена навсегда!');
    }
}
